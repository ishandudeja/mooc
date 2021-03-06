<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    protected $fillable = [
        'content_id', 'post_id', 'active',
    ];
    public function post(){
        $this->belongsTo(Posts::class);
    }
    public function onlineContent(){
       return $this->belongsTo(onlineContent::class);
    }

}
