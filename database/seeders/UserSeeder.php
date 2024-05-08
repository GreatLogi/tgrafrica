<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'Superadmin@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = 'Super Admin';
            $user->email = 'Superadmin@gmail.com';
            $user->password = Hash::make('admin@123');
            $user->save();
        }
    }
}
