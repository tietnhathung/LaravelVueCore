<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => "anh9ok",
            'email'    => "anh9ok@gmail.com",
            'fullname' => "Tiết Nhật Hưng",
            'password' => Hash::make("123456")
        ]);

        dd(User::where('username' ,"anh9ok")->get());
    }
}
