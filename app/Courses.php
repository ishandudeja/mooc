<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'description', 'level','programId','active',
    ];
    public function program(){
        return $this->belongsTo(Programs::class);
    }

    public function postCourses(){
        return $this->hasMany(PostCourses::class);
    }

    public function studentCourse(){
      return  $this->belongsToMany(StudentCourse::class);
    }

    public function subject(){
        return $this->hasMany(Subjects::class);
    }

}
