<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    public $timestamps = false;
    public function courses(){
        return $this->hasMany('mooc\Courses');
    }
}
