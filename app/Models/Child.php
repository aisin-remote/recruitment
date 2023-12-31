<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    const GENDER_MAN = '1';
    const GENDER_WOMAN = '2';

    protected $guarded = ['updated_at'];

    /**
     * job seeker relationship
     *
     * @return  Illuminate\Database\Eloquent\Model
     */
    public function jobSeeker()
    {
        return $this->belongsTo('App\Models\JobSeeker', 'job_seeker_id');
    }

    /**
     * Mutator date of birth
     * @param string $value
     */
    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = date('Y-m-d', strtotime($value));
    }

    /**
     * Acessor religion label
     * @return string
     */
    public function getGenderLabelAttribute()
    {
        $gender = $this->gender;

        switch ($gender) {
            case self::GENDER_WOMAN:
                return 'Perempuan';
                break;

            case self::GENDER_MAN:
                return 'Laki-Laki';
                break;

            default:
                return null;
                break;
        }
    }
}
