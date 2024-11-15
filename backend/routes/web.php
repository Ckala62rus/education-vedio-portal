<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\LessonCategoryController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/', function () {
////    return Inertia::render('Auth/Login');
//    return Redirect::route('login');
//})->name('/');

//Route::get('/www', function () {
//    return Inertia::render('Dashboard');
//})->name('www');

Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('admin/dashboard');
    })->name('www');

    Route::get('admin/profile', [ProfileController::class, 'profilePage'])->name('metronic.profile');

    Route::group(['prefix' => 'admin'], function () {
        // Lesson begin
        Route::get('lessons-pagination', [LessonController::class, 'getAllLessons'])->name('metronic.lesson.getAllLessons');
        Route::get('lessons', [LessonController::class, 'index'])->name('metronic.lesson.index');
        Route::get('lessons/create', [LessonController::class, 'create'])->name('metronic.lesson.create');
        Route::get('lessons/{id}/edit', [LessonController::class, 'edit'])->name('metronic.lesson.edit');
        Route::get('lessons/{id}', [LessonController::class, 'show'])->name('metronic.lesson.show');
        Route::put('lessons/{id}', [LessonController::class, 'update'])->name('metronic.lesson.update');
        Route::delete('lessons/{id}', [LessonController::class, 'destroy'])->name('metronic.lesson.destroy');
        Route::post('lessons', [LessonController::class, 'store'])->name('metronic.lesson.store');

        // Get concrete lesson view
        Route::get('course/lessons/{id}', [LessonController::class, 'lessonView'])->name('metronic.lesson.lesson-view');

        // User
        Route::get('user', [UserController::class, 'index'])->name('metronic.user.index')->middleware(['permission:read user']);
        Route::get('user/paginate', [UserController::class, 'getAllUsersWithPaginate']);
        Route::post('user', [UserController::class, 'store'])->middleware(['permission:create user']);
        Route::get('user/create', [UserController::class, 'create'])->name('metronic.user.create')->middleware(['permission:create user']);
        Route::get('user/{id}', [UserController::class, 'show'])->middleware(['permission:read user']);
        Route::put('user/{id}', [UserController::class, 'update'])->name('metronic.user.update')->middleware(['permission:update user']);
        Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('metronic.user.edit')->middleware(['permission:update user']);
        Route::delete('user/{id}', [UserController::class, 'destroy'])->middleware(['permission:delete user']);

        // Role
        Route::get('role', [RolePermissionController::class, 'index'])->name('metronic.role.index');
        Route::get('role/paginate', [RolePermissionController::class, 'getAllUsersWithPaginate']);
        Route::get('role/create', [RolePermissionController::class, 'create'])->name('metronic.role.create');
        Route::post('role', [RolePermissionController::class, 'store']);
        Route::get('role/all', [RolePermissionController::class, 'getRolesCollection']);
        Route::get('role/{id}', [RolePermissionController::class, 'show']);
        Route::put('role/{id}', [RolePermissionController::class, 'update']);
        Route::get('role/{id}/edit', [RolePermissionController::class, 'edit'])->name('metronic.role.edit');
        Route::delete('role/{id}', [RolePermissionController::class, 'destroy']);

        // Lesson Category
        Route::get('category', [LessonCategoryController::class, 'index'])->name('metronic.lesson-category.index');
        Route::post('category', [LessonCategoryController::class, 'store']);
        Route::get('category/create', [LessonCategoryController::class, 'create'])->name('metronic.lesson-category.create');
        Route::get('category/paginate', [LessonCategoryController::class, 'getAllLessonCategoriesWithPagination']);
        Route::get('category/collection', [LessonCategoryController::class, 'getAllLessonCategoryCollection']);
        Route::get('category/{id}/edit', [LessonCategoryController::class, 'edit'])->name('metronic.lesson-category.edit');
        Route::get('category/{id}', [LessonCategoryController::class, 'show']);
        Route::put('category/{id}', [LessonCategoryController::class, 'update']);
        Route::delete('category/{id}', [LessonCategoryController::class, 'destroy']);
    });

    // Permission
    Route::get('admin/permission', [RolePermissionController::class, 'getPermissions']);

    //Avatar
    Route::post('avatar/set', [UserController::class, 'setAvatar']);
    Route::get('avatar/get', [UserController::class, 'getAvatar']);
});

/* Front */
Route::get('/', [FrontController::class, 'index'])->middleware('blog')->name('front.index');
Route::get('/post/{id}', [FrontController::class, 'post'])->middleware('blog')->name('front.post');
Route::get('/data/post/{id}', [FrontController::class, 'singlePost'])->middleware('blog')->name('front.single-post');
Route::get('/data/post-paginate', [FrontController::class, 'getAllLessons'])->middleware('blog')->name('front.post-pagination');

require __DIR__.'/auth.php';
