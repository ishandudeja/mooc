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
                    'imageUrl' => "https://cdn-images-1.medium.com/max/2600/0*HICLyAdNSIyT0ODU.jpg",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Mobile Apps",
                    'description' => "Mobile Apps",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "https://i.udemycdn.com/course/750x422/11174_cbb1_116.jpg",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Programming Languages",
                    'description' => "Programming Languages",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "https://cdn-images-1.medium.com/max/1200/1*NhiqpOHe8jptZ4M95GkEMA.png",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Game Development",
                    'description' => "Game Development",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "https://spzone-simpleprogrammer.netdna-ssl.com/wp-content/uploads/2018/01/How-To-Get-Started-In-Game-Development.png",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Databases",
                    'description' => "Databases",
                    'level' => "4",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "https://www.supraits.com/wp-content/uploads/2018/01/Databases.png",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Software Testing",
                    'description' => "Software Testing",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Software Engineering",
                    'description' => "Software Engineering",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "",'fee'=>'14.99'
                ],
                [
                    'name' => "Development Tools",
                    'description' => "Development Tools",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "E-Commerce",
                    'description' => "E-Commerce",
                    'level' => "5",
                    'programs_id' => "1",
                    'active' => boolval(true),
                    'imageUrl' => "",'fee'=>'14.99'
                ],
                [
                    'name' => "Finance",
                    'description' => "Finance",
                    'level' => "4",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Entrepreneurship",
                    'description' => "Entrepreneurship",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Communications",
                    'description' => "Communications",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Management",
                    'description' => "Management",
                    'level' => "5",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Sales",
                    'description' => "Sales",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Strategy",
                    'description' => "Strategy",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Operations",
                    'description' => "Operations",
                    'level' => "7",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Project Management",
                    'description' => "Project Management",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Business Law",
                    'description' => "Business Law",
                    'level' => "7",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Data & Analytics",
                    'description' => "Data & Analytics",
                    'level' => "6",
                    'programs_id' => "2",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "IT Certification",
                    'description' => "IT Certification",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Network & Security",
                    'description' => "Network & Security",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Hardware",
                    'description' => "Hardware",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Operating Systems",
                    'description' => "Operating Systems",
                    'level' => "",
                    'programs_id' => "3",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Microsoft",
                    'description' => "Microsoft",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Apple",
                    'description' => "Apple",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Google",
                    'description' => "Google",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "SAP",
                    'description' => "SAP",
                    'level' => "",
                    'programs_id' => "4",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Personal Transformation",
                    'description' => "Personal Transformation",
                    'level' => "6",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Productivity",
                    'description' => "Productivity",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Leadership",
                    'description' => "Leadership",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Personal Finance",
                    'description' => "Personal Finance",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Career Development",
                    'description' => "Career Development",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Fitness",
                    'description' => "Fitness",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "General Health",
                    'description' => "General Health",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Sports",
                    'description' => "Sports",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Nutrition",
                    'description' => "Nutrition",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Yoga",
                    'description' => "Yoga",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Mental Health",
                    'description' => "Mental Health",
                    'level' => "",
                    'programs_id' => "5",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Web Design",
                    'description' => "Web Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Graphic Design",
                    'description' => "Graphic Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Design Tools",
                    'description' => "Design Tools",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "User Experience",
                    'description' => "User Experience",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Game Design",
                    'description' => "Game Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Design Thinking",
                    'description' => "Design Thinking",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "3D & Animation",
                    'description' => "3D & Animation",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Fashion",
                    'description' => "Fashion",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Architectural Design",
                    'description' => "Architectural Design",
                    'level' => "",
                    'programs_id' => "6",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Digital Marketing",
                    'description' => "Digital Marketing",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Search Engine Optimization",
                    'description' => "Search Engine Optimization",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Social Media Marketing",
                    'description' => "Social Media Marketing",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Branding",
                    'description' => "Branding",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Marketing Fundamentals",
                    'description' => "Marketing Fundamentals",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Analytics & Automation",
                    'description' => "Analytics & Automation",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Public Relations",
                    'description' => "Public Relations",
                    'level' => "",
                    'programs_id' => "7",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Digital Photography",
                    'description' => "Digital Photography",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Photography Fundamentals",
                    'description' => "Photography Fundamentals",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Portraits",
                    'description' => "Portraits",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Photography Tools",
                    'description' => "Photography Tools",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Commercial Photography",
                    'description' => "Commercial Photography",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Video Design",
                    'description' => "Video Design",
                    'level' => "",
                    'programs_id' => "8",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Instruments",
                    'description' => "Instruments",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Production",
                    'description' => "Production",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Music Fundamentals",
                    'description' => "Music Fundamentals",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Vocal",
                    'description' => "Vocal",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Music Techniques",
                    'description' => "Music Techniques",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Music Software",
                    'description' => "Music Software",
                    'level' => "",
                    'programs_id' => "10",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Engineering",
                    'description' => "Engineering",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Humanities",
                    'description' => "Humanities",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Math",
                    'description' => "Math",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Science",
                    'description' => "Science",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Online Education",
                    'description' => "Online Education",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Social Science",
                    'description' => "Social Science",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],
                [
                    'name' => "Language",
                    'description' => "Language",
                    'level' => "",
                    'programs_id' => "11",
                    'active' => boolval(true),
                    'imageUrl' => "",
                    'fee'=>'14.99'
                ],

            ]

        );
    }
}
