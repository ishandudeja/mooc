<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = [
        'name', 'description','active','imageUrl',
    ];

    public  function courses(){
        return $this->hasMany(Courses::class);
    }
}
