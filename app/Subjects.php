<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = [
        'name','description','courses_id','active',
    ];

    public function course(){
        return $this->belongsTo(Courses::class);
    }
    public function onlineContent(){
        return $this->hasMany(OnlineContent::class);
    }
    public function postSubject(){
        return $this->hasMany(OnlineContent::class);
    }
}
