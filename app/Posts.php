<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Posts extends Model
{
    protected $fillable = [
        'query', 'createdBy', 'assignTo','active',
    ];
    public function postComments(){
       return $this->hasMany(PostComments::class,'postId','id');
    }

    public function postContent(){
       return $this->hasOne(PostComments::class,'postId','id');
    }
    public function postCourse(){
       return $this->hasOne(PostCourses::class,'postId','id');
    }

    public function postSubject(){
        return $this->hasOne(PostSubjects::class,'postId','id');
    }

    public function postCreatedBy(){
        return $this->belongsTo(Uses::class,'createdBy','id');
    }

    public function postAssignTo(){
        return $this->belongsTo(User::class,'assignTo','id');
    }
}
