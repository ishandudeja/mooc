<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class OnlineContent extends Model
{
    protected $fillable = [
        'caption', 'description', 'url', 'subjectId', 'active',
    ];

    public function subject()
    {
       return $this->belongsTo(Subjects::class,'subjectId','id');
    }
    public function postContent(){
        return $this->hasMany(PostContent::class,'contentId','id');
    }

}
