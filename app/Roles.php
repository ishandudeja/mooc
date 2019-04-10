<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    public function userRole(){
        return $this->belongsToMany(UserRole::class);
    }
}
