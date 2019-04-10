<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Tutter extends Model
{
    protected $fillable = [
        'name','userId','subjectId','active',
    ];

    public function user(){
        return $this->belongsTo(User::class,'userId','id');
    }
public function subjects(){
        return $this->belongsTo(Subjects::class,'subjectId','id');
}
}
