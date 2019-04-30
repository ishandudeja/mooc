<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
                [
                    'name' => "Web Development",
                    'description' => "Web Development",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "fab fa-chrome",
                ],
                [
                    'name' => "Mobile Apps",
                    'description' => "Mobile Apps",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Programming Languages",
                    'description' => "Programming Languages",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Game Development",
                    'description' => "Game Development",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Databases",
                    'description' => "Databases",
                    'level' => "4",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Software Testing",
                    'description' => "Software Testing",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Software Engineering",
                    'description' => "Software Engineering",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Development Tools",
                    'description' => "Development Tools",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "E-Commerce",
                    'description' => "E-Commerce",
                    'level' => "5",
                    'programId' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Finance",
                    'description' => "Finance",
                    'level' => "4",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Entrepreneurship",
                    'description' => "Entrepreneurship",
                    'level' => "5",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Communications",
                    'description' => "Communications",
                    'level' => "5",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Management",
                    'description' => "Management",
                    'level' => "5",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Sales",
                    'description' => "Sales",
                    'level' => "6",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Strategy",
                    'description' => "Strategy",
                    'level' => "6",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Operations",
                    'description' => "Operations",
                    'level' => "7",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Project Management",
                    'description' => "Project Management",
                    'level' => "6",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Business Law",
                    'description' => "Business Law",
                    'level' => "7",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Data & Analytics",
                    'description' => "Data & Analytics",
                    'level' => "6",
                    'programId' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "IT Certification",
                    'description' => "IT Certification",
                    'level' => "",
                    'programId' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Network & Security",
                    'description' => "Network & Security",
                    'level' => "",
                    'programId' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Hardware",
                    'description' => "Hardware",
                    'level' => "",
                    'programId' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Operating Systems",
                    'description' => "Operating Systems",
                    'level' => "",
                    'programId' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Microsoft",
                    'description' => "Microsoft",
                    'level' => "",
                    'programId' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Apple",
                    'description' => "Apple",
                    'level' => "",
                    'programId' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Google",
                    'description' => "Google",
                    'level' => "",
                    'programId' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "SAP",
                    'description' => "SAP",
                    'level' => "",
                    'programId' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Personal Transformation",
                    'description' => "Personal Transformation",
                    'level' => "6",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Productivity",
                    'description' => "Productivity",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Leadership",
                    'description' => "Leadership",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Personal Finance",
                    'description' => "Personal Finance",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Career Development",
                    'description' => "Career Development",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Fitness",
                    'description' => "Fitness",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "General Health",
                    'description' => "General Health",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Sports",
                    'description' => "Sports",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Nutrition",
                    'description' => "Nutrition",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Yoga",
                    'description' => "Yoga",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Mental Health",
                    'description' => "Mental Health",
                    'level' => "",
                    'programId' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Web Design",
                    'description' => "Web Design",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Graphic Design",
                    'description' => "Graphic Design",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Design Tools",
                    'description' => "Design Tools",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "User Experience",
                    'description' => "User Experience",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Game Design",
                    'description' => "Game Design",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Design Thinking",
                    'description' => "Design Thinking",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "3D & Animation",
                    'description' => "3D & Animation",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Fashion",
                    'description' => "Fashion",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Architectural Design",
                    'description' => "Architectural Design",
                    'level' => "",
                    'programId' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Digital Marketing",
                    'description' => "Digital Marketing",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Search Engine Optimization",
                    'description' => "Search Engine Optimization",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Social Media Marketing",
                    'description' => "Social Media Marketing",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Branding",
                    'description' => "Branding",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Marketing Fundamentals",
                    'description' => "Marketing Fundamentals",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Analytics & Automation",
                    'description' => "Analytics & Automation",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Public Relations",
                    'description' => "Public Relations",
                    'level' => "",
                    'programId' => "9",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Digital Photography",
                    'description' => "Digital Photography",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Photography Fundamentals",
                    'description' => "Photography Fundamentals",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Portraits",
                    'description' => "Portraits",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Photography Tools",
                    'description' => "Photography Tools",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Commercial Photography",
                    'description' => "Commercial Photography",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Video Design",
                    'description' => "Video Design",
                    'level' => "",
                    'programId' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Instruments",
                    'description' => "Instruments",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Production",
                    'description' => "Production",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Fundamentals",
                    'description' => "Music Fundamentals",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Vocal",
                    'description' => "Vocal",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Techniques",
                    'description' => "Music Techniques",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Software",
                    'description' => "Music Software",
                    'level' => "",
                    'programId' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Engineering",
                    'description' => "Engineering",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Humanities",
                    'description' => "Humanities",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Math",
                    'description' => "Math",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Science",
                    'description' => "Science",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Online Education",
                    'description' => "Online Education",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Social Science",
                    'description' => "Social Science",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Language",
                    'description' => "Language",
                    'level' => "",
                    'programId' => "12",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],

            ]

        );
    }
}
