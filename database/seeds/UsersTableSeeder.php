<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Ishan",
                'email' => "ishandudeja@gmail.com",
                'password' => "12345678",
            ]
            , [
                'name' => "Akash",
                'email' => "akashgoel@gmail.com",
                'password' => "12345678",
            ]
        ]);
    }
}
