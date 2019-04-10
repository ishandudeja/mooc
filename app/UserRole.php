<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'userId', 'roleId', 'active',
    ];

//    public function role()
//    {
//        return $this->belongsTo(Roles::class);
//    }
//
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }


}
