<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'query', 'createdBy', 'assignTo','active',
    ];
    public function postComments(){
       return $this->hasMany(PostComments::class);
    }

    public function postContent(){
       return $this->hasOne(PostComments::class);
    }
    public function postCourse(){
       return $this->hasOne(PostCourses::class);
    }

    public function postSubject(){
        return $this->hasOne(PostSubjects::class);
    }
}
