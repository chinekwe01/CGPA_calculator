<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable =[
        'session_date',
            'matno',
            'diploma',
            'address',
            'course_registered_for',
            'course_code',
            'course_title',
            'credit_unit',
    ];

    public function User(){
        return $this->hasMany(User::class, 'user_id');
    }
}
