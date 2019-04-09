<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function breed() {
        return $this->belongsTo('mooc\Programs');
    }
}
