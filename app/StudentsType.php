<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class StudentsType extends Model
{
    protected $fillable = [
        'name','description','countryFrom',
    ];
    public function students(){
        return $this->hasMany(Students::class,'studentId','id');
    }
}
