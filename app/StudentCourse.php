<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    protected $fillable = [
        'sessionStart', 'sessionEnd','fee','user_id','course_id','rating','active'
    ];

    public function courses(){
        return $this->belongsTo(Courses::class,'course_id');
    }
//
//    public function students(){
//        return $this->belongsToMany(Students::class);
//    }
}
