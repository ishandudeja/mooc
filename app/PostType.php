<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function postcomment(){
        return $this->hasMany(PostType::class,'postTypeId','id');
    }
}
