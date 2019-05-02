<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'description', 'level','program_id','active',
    ];
    public function program(){
        return $this->belongsTo(Programs::class);
    }

    public function postCourses(){
        return $this->hasMany(PostCourses::class);
    }

    public function students(){
      return  $this->belongsToMany(Students::class,'student_courses','course_id','student_id');
    }

    public function subjects(){
        return $this->hasMany(Subjects::class);
    }

}
