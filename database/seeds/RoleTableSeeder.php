<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name'=>"ROLE_ADMIN",
                'description'=>"A user with admin privilege"
            ],
            [
                'name'=>"ROLE_STUDENT",
                'description'=>"A user with some privilege"
            ]
        ]);
    }
}
