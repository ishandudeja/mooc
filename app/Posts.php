<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Posts extends Model
{
    protected $fillable = [
        'query', 'createdBy', 'assignTo', 'active',
    ];

    public function Comments()
    {
        return $this->hasMany(PostComments::class);
    }

    public function postContent()
    {
        return $this->belongsToMany(OnlineContent::class, 'post_contents', 'post_id', 'content_id');
    }

    public function postCourse()
    {
        return $this->hasOne(PostCourses::class);
    }

    public function postSubject()
    {
        return $this->hasOne(PostSubjects::class);
    }

    public function postCreatedBy()
    {
        return $this->belongsTo(Uses::class, 'createdBy', 'id');
    }

    public function postAssignTo()
    {
        return $this->belongsTo(User::class, 'assignTo', 'id');
    }


}
