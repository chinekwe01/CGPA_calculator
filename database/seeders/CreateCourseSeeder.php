<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CreateCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
               'session_date'=>'2022',
               'matno'=>'HA22/0012',
               'user_id'=>'1',
               'diploma'=>'National Diploma',
               'address'=>'No 5 Koghan street',
               'course registered for'=>'First Semester',
               'course code'=>'COM311',
               'course title'=>'Operating System',
               'credit unit'=>'3'
            ],
            [
                'session_date'=>'2022',
                'matno'=>'HA22/0012',
                'user_id'=>'1',
                'diploma'=>'National Diploma',
                'address'=>'No 5 Koghan street',
                'course registered for'=>'First Semester',
                'course code'=>'COM312',
                'course title'=>'Database Design 1',
                'credit unit'=>'3'
             ],
        ];

        foreach ($courses as $key => $course) {
            Course::create($course);
        }
    }
}
