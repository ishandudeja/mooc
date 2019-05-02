<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostSubjects extends Model
{
    protected $fillable = [
        'subject_id', 'post_id','active',
    ];
    public function subject(){
        return $this->belongsTo(Subjects::class);
    }

    public function post(){
        return $this->belongsTo(Posts::class);
    }
}
