<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostCourses extends Model
{
    protected $fillable = [
        'course_id', 'post_id', 'active',
    ];

    public function post(){
        return $this->belongsTo(Posts::class,'postId','id');
    }

    public function courses(){
        return $this->belongsTo(Courses::class,'courseId','id');
    }
}
