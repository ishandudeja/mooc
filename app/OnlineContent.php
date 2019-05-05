<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class OnlineContent extends Model
{
    protected $fillable = [
        'caption', 'description', 'url', 'subjects_id', 'active',
    ];

    public function subject()
    {
       return $this->belongsTo(Subjects::class);
    }
    public function posts(){
        return $this->belongsToMany(Posts::class,'post_contents','content_id','post_id');

    }



}
