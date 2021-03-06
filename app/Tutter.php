<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Tutter extends Model
{
    protected $fillable = [
        'name','userId','subject_id','active',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
public function subjects(){
        return $this->belongsTo(Subjects::class);
}
}
