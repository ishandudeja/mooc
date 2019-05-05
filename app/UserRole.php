<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_Id', 'role_Id', 'active',
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
