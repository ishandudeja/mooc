<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'gender', 'birthdate', 'mailAddress', 'phone', 'userId', 'studentTypeId', 'active',
    ];

    public function Courses()
    {
        return $this->belongsToMany(Courses::class,'student_courses','studentId','courseId');

    }

    public function studentType()
    {
        return $this->belongsTo(StudentsType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tutter()
    {
        return $this->hasOne(Tutter::class);
    }

}
