<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostSubjects extends Model
{
    protected $fillable = [
        'subjectId', 'postId','active',
    ];
    public function subject(){
        return $this->belongsTo(Subjects::class,'subjectId','id');
    }

    public function post(){
        return $this->belongsTo(Posts::class,'postId','id');
    }
}
