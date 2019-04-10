<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'description', 'level','programId','active',
    ];
    public function program(){
        return $this->belongsTo(Programs::class,'programId','id');
    }

    public function postCourses(){
        return $this->hasMany(PostCourses::class,'courseId','id');
    }

    public function students(){
      return  $this->belongsToMany(Students::class,'student_courses','courseId','studentId');
    }

    public function subject(){
        return $this->hasMany(Subjects::class,'courseId','id');
    }

}
