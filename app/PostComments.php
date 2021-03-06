<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    protected $fillable = [
        'postId', 'postType_id', 'user_id','comment','active','rating',
    ];
    public  function Post(){
     return   $this->belongsTo(Posts::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function postType(){
        return $this->belongsTo(PostType::class);
    }
}
