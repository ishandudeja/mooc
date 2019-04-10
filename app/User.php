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
        return $this->hasOne(Students::class,'userId','id');
    }

    public function postComments()
    {
        return $this->hasMany(PostComments::class,'userId','id');
    }

    public function roles(){
        return $this->belongsToMany(Roles::class,'user_roles','userId','roleId');
    }
     public function tutter(){
        return $this->hasMany(Tutter::class,'userId','id');
     }
     public function postCreatedBy(){
        return $this->hasMany(Posts::class,'createdBy','id');
     }

     public function postAssignTo(){
        return $this->hasMany(Posts::class,'assignTo','id');
     }

}
