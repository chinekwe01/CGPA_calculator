<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Student',
               'email'=>'student@mail.com',
               'type'=>0,
               'password'=> bcrypt('asdfasdf'),
            ],
            [
               'name'=>'Lecturer',
               'email'=>'lecturer@mail.com',
               'type'=>1,
               'password'=> bcrypt('asdfasdf'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@mail.com',
               'type'=> 2,
               'password'=> bcrypt('asdfasdf'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
