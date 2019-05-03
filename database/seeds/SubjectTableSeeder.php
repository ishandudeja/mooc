<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => "Angular",
                'courses_id' => "1",
                'description' => "Angular Web Development",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "PHP",
                'courses_id' => "1",
                'description' => "Php is a programming language",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "CSS",
                'courses_id' => "1",
                'description' => "CSS is used for designing",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Android",
                'courses_id' => "2",
                'description' => "Create Android mobile Apps",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "IOS",
                'courses_id' => "2",
                'description' => "Create IOS device Apps",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Python",
                'courses_id' => "3",
                'description' => "Programming Language",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Java",
                'courses_id' => "3",
                'description' => "Programming Language",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "3D Game Development",
                'courses_id' => "4",
                'description' => "Develop 3D Games",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "2D Game Development",
                'courses_id' => "4",
                'description' => "Develop 2D Games",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Mobile Games",
                'courses_id' => "4",
                'description' => "Develop Mobile Games",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "MySQL",
                'courses_id' => "5",
                'description' => "MySQL Database",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Oracle",
                'courses_id' => "5",
                'description' => "Oracle Database",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "SQL Server",
                'courses_id' => "5",
                'description' => "SQL Server",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "API Testing",
                'courses_id' => "6",
                'description' => "API Testing ",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Big Data",
                'courses_id' => "7",
                'description' => "Software Engineering",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "GitHub",
                'courses_id' => "8",
                'description' => "Development Tools",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Word Press",
                'courses_id' => "9",
                'description' => "ECommerce Websites",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Stock Trading",
                'courses_id' => "10",
                'description' => "Business Finance",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Business Plans",
                'courses_id' => "11",
                'description' => "Entrepreneurship",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Presentation Skills",
                'courses_id' => "12",
                'description' => "Business Communication",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Risk Management",
                'courses_id' => "13",
                'description' => "Management Skills",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Marketing Strategy",
                'courses_id' => "14",
                'description' => "Sales and Marketing",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Digital Marketing",
                'courses_id' => "15",
                'description' => "Business Strategy",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Supply Chain",
                'courses_id' => "16",
                'description' => "Operations Management",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Prince2",
                'courses_id' => "17",
                'description' => "Project Management Strategies",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Digital Marketing",
                'courses_id' => "18",
                'description' => "Business Strategy",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Data Science and Analytics",
                'courses_id' => "19",
                'description' => "Data Analysis",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Cisco CCNA",
                'courses_id' => "20",
                'description' => "IT Certification",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Cyber Security",
                'courses_id' => "21",
                'description' => "Network Security",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Robotics",
                'courses_id' => "22",
                'description' => "Hardware",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Ubuntu",
                'courses_id' => "23",
                'description' => "Operating Suystem",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "MS Office",
                'courses_id' => "24",
                'description' => "Microsoft Office Productivity",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Mac Basics",
                'courses_id' => "25",
                'description' => "Apple Office Productivity",
                'active' => boolval(true),
               'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],

            [
                'name' => "Subject Name",
                'courses_id' => "26",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "27",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "28",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "29",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "30",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "31",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "32",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "33",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "34",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "35",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "36",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "37",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "38",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "39",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "40",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "41",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "42",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "43",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "44",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "45",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "46",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "47",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "48",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "49",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "50",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "51",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "52",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "53",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "54",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "55",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "56",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "57",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "58",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "59",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "60",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "61",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "62",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "63",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "64",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "65",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "66",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "67",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "68",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "69",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "70",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "71",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "72",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],
            [
                'name' => "Subject Name",
                'courses_id' => "73",
                'description' => "Description Goes Here",
                'active' => boolval(true),
                'imageUrl'=>"http://pluspng.com/img-png/english-subject-png-english-2246.png"
            ],

        ]);
    }
}
