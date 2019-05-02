<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class OnlineContent extends Model
{
    protected $fillable = [
        'caption', 'description', 'url', 'subject_id', 'active',
    ];

    public function subject()
    {
       return $this->belongsTo(Subjects::class);
    }
    public function postContent(){
        return $this->hasMany(PostContent::class);
    }

}
