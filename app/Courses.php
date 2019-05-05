<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'description', 'level','programs_id','active','imageUrl'
    ];
    public function program(){
        return $this->belongsTo(Programs::class);
    }

    public function postCourses(){
        return $this->hasMany(PostCourses::class);
    }

    public function students(){
      return  $this->belongsToMany(User::class,'student_courses','course_id','user_id');
    }

    public function subjects(){
        return $this->hasMany(Subjects::class);
    }

    public function studentCourse(){
        return $this->hasMany(StudentCourse::class,'course_id');
    }

}
