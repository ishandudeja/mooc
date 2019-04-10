<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'userId', 'roleId', 'active',
    ];

    public function role()
    {
        return $this->belongsToMany(Roles::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }


}
