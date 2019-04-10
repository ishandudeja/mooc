<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    protected $fillable = [
        'contentId', 'postId', 'active',
    ];
    public function post(){
        $this->belongsTo(Posts::class,'postId','id');
    }
    public function onlineContent(){
       return $this->belongsTo(onlineContent::class,'contentId','id');
    }

}
