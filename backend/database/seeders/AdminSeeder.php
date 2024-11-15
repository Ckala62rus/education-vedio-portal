<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('123123'),
        ]);

        $role = Role::create(['name'=>'super']);

        $user->syncRoles($role);
    }
}
