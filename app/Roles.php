<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    public function users(){
        return $this->belongsToMany(User::class,'user_roles','role_id','user_id')->withTimestamps();;
    }
}
