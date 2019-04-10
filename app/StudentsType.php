<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class StudentsType extends Model
{
    protected $fillable = [
        'name','description','countryFrom',
    ];
}
