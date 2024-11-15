<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

/**
 * tutorial => https://remotestack.io/laravel-sanctum-auth-and-crud-rest-api-tutorial/
 */
class AuthTokenController extends BaseController
{
    /**
     * @OA\Post(
     *     path="/api/login",
     *     summary="Login (Get bearer token)",
     *     tags={"Auth"},
     *     security={
     *      {"passport": {}},
     *     },
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 example={"email": "admin@mail.ru", "password": "123123"}
     *             )
     *         )
     *     ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Authorization success!",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", type="boolean", example="true"),
     *              @OA\Property(property="message", type="string", example="User logged-in!"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(
     *                      property="auth",
     *                      type="object",
     *                      @OA\Property(property="token", type="string", example="ikH5Kp+Urr8yzekJutELi9Te0s/Ln4p+42uwe4CIDA0="),
     *                      @OA\Property(property="name", type="string", example="admin"),
     *                  ),
     *              ),
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Aauthentication failed!",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", type="boolean", example="false"),
     *              @OA\Property(property="message", type="string", example="Unauthorised"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(
     *                      property="auth",
     *                      type="null",
     *                      example="null"
     *                  ),
     *              ),
     *          )
     *      ),
     *
     * ),
     *
     * @OAS\SecurityScheme(
     *      securityScheme="bearerAuth",
     *      type="http",
     *      scheme="bearer"
     * )
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken;
            $success['name'] =  $auth->name;

            return $this->response(
                ['auth' => $success],
                'User logged-in!',
                true,
                ResponseAlias::HTTP_OK
            );
        }
        else{
            return $this->response(
                ['auth' => null],
                'Unauthorised',
                false,
                ResponseAlias::HTTP_UNAUTHORIZED
            );
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->response(
                [],
                'Validation error',
                true,
                ResponseAlias::HTTP_UNAUTHORIZED
            );
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['name'] =  $user->name;

        return $this->response(
            ['auth' => $success],
            'User successfully registered!',
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        $user = Auth::user();
        $user->tokens()->delete();

        return $this->response(
            [],
            'Logout',
            true,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * @OA\Get(
     *     path="/api/me",
     *     summary="Get current auth user model",
     *     tags={"Auth"},
     *     security={{"bearerAuth":{}}},
     *
     *      @OA\Response(
     *          response=200,
     *          description="Ok",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", type="boolean", example="true"),
     *              @OA\Property(property="message", type="string", example="Current Auth user"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(
     *                      property="user",
     *                      type="object",
     *                          @OA\Property(property="id", type="integer", example="1"),
     *                          @OA\Property(property="name", type="string", example="admin"),
     *                          @OA\Property(property="email", type="string", example="admin@mail.ru"),
     *                          @OA\Property(property="email_verified_at", type="null", example="null"),
     *                          @OA\Property(property="created_at", type="string", example="2023-02-28T06:05:41.000000Z"),
     *                          @OA\Property(property="updated_at", type="string", example="2023-02-28T06:05:41.000000Z"),
     *                  ),
     *              ),
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthntication",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", type="boolean", example="false"),
     *              @OA\Property(property="message", type="string", example="Current Auth user"),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  @OA\Property(
     *                      property="user",
     *                      type="null",
     *                      example="null"
     *                  ),
     *              ),
     *          )
     *      ),
     *
     * )
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        $user = Auth::user();

        if ($user){
            return $this->response(
                ['user' => Auth::user()],
                'Current Auth user',
                true,
                ResponseAlias::HTTP_OK
            );
        }

        return $this->response(
            ['user' => null],
            'Current Auth user',
            false,
            ResponseAlias::HTTP_UNAUTHORIZED
        );
    }
}
