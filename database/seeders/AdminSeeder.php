<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $data  = [
            "name" => 'Rise Admin',
            "email" => 'admin@admin.com',
            "password" => Hash::make('admin')
        ];

        $user = User::create($data);

        if ($user) {
            return $user;
        }
        return null;
    }
}
