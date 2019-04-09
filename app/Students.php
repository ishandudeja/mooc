<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function user()
    {
        return $this->hasOne('mooc\Users');
    }
    public function studentType(){
        return $this->hasOne('mooc\StudentType');
    }

}
