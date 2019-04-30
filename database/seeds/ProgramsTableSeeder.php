<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            [
            'name' => "Development",
            'description' => "Developing IT Program and Software",
            'active' => boolval(true),
            'imageUrl'=>"fas fa-file-code"
             ],
            [
                'name'=>"Business",
                'description'=>"Business operation knowledge",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-chart-bar",
            ],
            [
                'name'=>"IT & Software",
                'description'=>"IT & Software",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-laptop-code",
            ],
            [
                'name'=>"Office Productivity",
                'description'=>"Office Productivity",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-file-excel",
            ],
            [
                'name'=>"Personal Development",
                'description'=>"Personal Development",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-heartbeat",
            ],
            [
                'name'=>"Design",
                'description'=>"Design & craft",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-pencil-ruler",
            ],
            [
                'name'=>"Marketing",
                'description'=>"Marketing World",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-bullseye",
            ],
            [
                'name'=>"Photography",
                'description'=>"Photography",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-camera-retro",
            ],
            [
                'name'=>"Health & Fitness",
                'description'=>"Health & Fitness",
                'active'=>boolval(true),
                'imageUrl'=>"",
            ],
            [
                'name'=>"Music",
                'description'=>"Music",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-music",
            ],
            [
                'name'=>"Teaching & Academics",
                'description'=>"Teaching & Academics",
                'active'=>boolval(true),
                'imageUrl'=>"fas fa-graduation-cap",
            ],
]
        );
    }
}
