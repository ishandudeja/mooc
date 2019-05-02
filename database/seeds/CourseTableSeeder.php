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
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "fab fa-chrome",
                ],
                [
                    'name' => "Mobile Apps",
                    'description' => "Mobile Apps",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Programming Languages",
                    'description' => "Programming Languages",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Game Development",
                    'description' => "Game Development",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Databases",
                    'description' => "Databases",
                    'level' => "4",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Software Testing",
                    'description' => "Software Testing",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Software Engineering",
                    'description' => "Software Engineering",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Development Tools",
                    'description' => "Development Tools",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "E-Commerce",
                    'description' => "E-Commerce",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Finance",
                    'description' => "Finance",
                    'level' => "4",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Entrepreneurship",
                    'description' => "Entrepreneurship",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Communications",
                    'description' => "Communications",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Management",
                    'description' => "Management",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Sales",
                    'description' => "Sales",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Strategy",
                    'description' => "Strategy",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Operations",
                    'description' => "Operations",
                    'level' => "7",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Project Management",
                    'description' => "Project Management",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Business Law",
                    'description' => "Business Law",
                    'level' => "7",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Data & Analytics",
                    'description' => "Data & Analytics",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "IT Certification",
                    'description' => "IT Certification",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Network & Security",
                    'description' => "Network & Security",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Hardware",
                    'description' => "Hardware",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Operating Systems",
                    'description' => "Operating Systems",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Microsoft",
                    'description' => "Microsoft",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Apple",
                    'description' => "Apple",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Google",
                    'description' => "Google",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "SAP",
                    'description' => "SAP",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Personal Transformation",
                    'description' => "Personal Transformation",
                    'level' => "6",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Productivity",
                    'description' => "Productivity",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Leadership",
                    'description' => "Leadership",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Personal Finance",
                    'description' => "Personal Finance",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Career Development",
                    'description' => "Career Development",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Fitness",
                    'description' => "Fitness",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "General Health",
                    'description' => "General Health",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Sports",
                    'description' => "Sports",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Nutrition",
                    'description' => "Nutrition",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Yoga",
                    'description' => "Yoga",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Mental Health",
                    'description' => "Mental Health",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Web Design",
                    'description' => "Web Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Graphic Design",
                    'description' => "Graphic Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Design Tools",
                    'description' => "Design Tools",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "User Experience",
                    'description' => "User Experience",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Game Design",
                    'description' => "Game Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Design Thinking",
                    'description' => "Design Thinking",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "3D & Animation",
                    'description' => "3D & Animation",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Fashion",
                    'description' => "Fashion",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Architectural Design",
                    'description' => "Architectural Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Digital Marketing",
                    'description' => "Digital Marketing",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Search Engine Optimization",
                    'description' => "Search Engine Optimization",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Social Media Marketing",
                    'description' => "Social Media Marketing",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Branding",
                    'description' => "Branding",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Marketing Fundamentals",
                    'description' => "Marketing Fundamentals",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Analytics & Automation",
                    'description' => "Analytics & Automation",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Public Relations",
                    'description' => "Public Relations",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Digital Photography",
                    'description' => "Digital Photography",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Photography Fundamentals",
                    'description' => "Photography Fundamentals",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Portraits",
                    'description' => "Portraits",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Photography Tools",
                    'description' => "Photography Tools",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Commercial Photography",
                    'description' => "Commercial Photography",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Video Design",
                    'description' => "Video Design",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Instruments",
                    'description' => "Instruments",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Production",
                    'description' => "Production",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Fundamentals",
                    'description' => "Music Fundamentals",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Vocal",
                    'description' => "Vocal",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Techniques",
                    'description' => "Music Techniques",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Music Software",
                    'description' => "Music Software",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Engineering",
                    'description' => "Engineering",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Humanities",
                    'description' => "Humanities",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Math",
                    'description' => "Math",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Science",
                    'description' => "Science",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Online Education",
                    'description' => "Online Education",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Social Science",
                    'description' => "Social Science",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],
                [
                    'name' => "Language",
                    'description' => "Language",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => ""
                ],

            ]

        );
    }
}
