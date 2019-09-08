<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Yadahan\AuthenticationLog\AuthenticationLogable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobSeeker extends Authenticatable implements MustVerifyEmail
{
	use Notifiable, AuthenticationLogable;

	const STATUS_BLACKLIST = '1';
	const STATUS_UNBLACKLIST = '0';

    const GENDER_MAN = '1';
    const GENDER_WOMAN = '2';

    const RELIGION_ISLAM = '1';
    const RELIGION_HINDU = '2';
    const RELIGION_BUDHA = '3';
    const RELIGION_KATOLIK = '4';
    const RELIGION_PROTESTAN = '5';

	/**
	 * Mass assignment guarded
	 * @var array
	 */
    protected $guarded = ['updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Education level relationship many to one
     * @return Illuminate\Database\Eloquent\Model
     */
    public function educationLevel()
    {
    	return $this->belongsTo('App\Models\EducationLevel');
    }

    /**
     * village relation
     *
     * @return  Illuminate\Database\Eloquent\Model
     */
    public function addressVillage()
    {
        return $this->belongsTo('App\Models\Village', 'address_village_id');
    }

    /**
     * village relation
     *
     * @return  Illuminate\Database\Eloquent\Model
     */
    public function domicileVillage()
    {
        return $this->belongsTo('App\Models\Village', 'domicile_village_id');
    }

    /**
     * Scope a query to only blacklist jobseekers
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBlacklist($query)
    {
        return $query->where('is_blacklist', self::STATUS_BLACKLIST);
    }

    /**
     * Scope a query to only unblacklist jobseekers
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnBlacklist($query)
    {
        return $query->where('is_blacklist', self::STATUS_UNBLACKLIST);
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
     * Accessor driving licences
     *
     * @param string $value
     * @return  array
     */
    public function getDrivingLicencesAttribute($value)
    {
        $licences = json_decode($value, true);
        $returnData = [];

        foreach ($licences as $key => $value) {
            $returnData[$value['type']] = $value['value'];
        }

        return $this->attributes['driving_licences'] = $returnData;
    }
}
