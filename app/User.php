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

    public function roles(){
        return $this->belongsToMany(Roles::class,'user_roles','user_id','role_id')->withTimestamps();
    }
     public function tutter(){
        return $this->hasMany(Tutter::class);
     }
     public function postCreatedBy(){
        return $this->hasMany(Posts::class,'createdBy','id');
     }

     public function postAssignTo(){
        return $this->hasMany(Posts::class,'assignTo','id');
     }
    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This action is unauthorized.');
    }
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    public function hasRole($role)
    {
        if ($this->roles()->where(‘name’, $role)->first()) {
            return true;
        }
        return false;
    }
}
