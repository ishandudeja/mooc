<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = [
        'name','description','courseId','active',
    ];

    public function course(){
        return $this->belongsTo(Courses::class,'courseId','id');
    }
    public function onlineContent(){
        return $this->hasMany(OnlineContent::class,'subjectId','id');
    }
    public function postSubject(){
        return $this->hasMany(OnlineContent::class,'subjectId','id');
    }
}
