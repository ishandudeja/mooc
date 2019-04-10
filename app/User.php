<?php

namespace mooc;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function students(){
        return $this->hasOne(Students::class);
    }

    public function postComments()
    {
        return $this->hasMany(PostComments::class);
    }

    public function userRole(){
        return $this->belongsToMany(UserRole::class);
    }
     public function tutter(){
        return $this->hasMany(Tutter::class);
     }
     public function postCreatedBy(){
        return $this->hasMany(Posts::class);
     }
}
