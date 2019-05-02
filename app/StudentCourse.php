<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $fillable = [
        'sessionStart', 'sessionEnd','fee','student_id','course_id','rating','active'
    ];

//    public function courses(){
//        return $this->belongsToMany(Courses::class,'');
//    }
//
//    public function students(){
//        return $this->belongsToMany(Students::class);
//    }
}
