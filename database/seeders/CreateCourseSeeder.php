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
               'course_registered_for'=>'First Semester',
               'course_code'=>'COM311',
               'course_title'=>'Operating System',
               'credit_unit'=>'3'
            ],
            [
                'session_date'=>'2022',
                'matno'=>'HA22/0012',
                'user_id'=>'1',
                'diploma'=>'National Diploma',
                'address'=>'No 5 Koghan street',
                'course_registered_for'=>'First Semester',
                'course_code'=>'COM312',
                'course_title'=>'Database Design 1',
                'credit_unit'=>'3'
             ],
        ];

        foreach ($courses as $key => $course) {
            Course::create($course);
        }
    }
}
