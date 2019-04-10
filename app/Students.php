<?php

namespace mooc;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'gender', 'birthdate', 'mailAddress', 'phone', 'userId', 'studentTypeId', 'active',
    ];

    public function studentCourse()
    {
        return $this->belongsToMany(StudentCourse::class);

    }

    public function studentType()
    {
        return $this->belongsTo(StudentsType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tutter()
    {
        return $this->hasOne(Tutter::class);
    }

}
