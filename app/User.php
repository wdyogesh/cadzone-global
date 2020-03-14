<?php

namespace App;

use App\Models\Employee;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'present_phone', 'perma_number', 'role', 'password', 'images',
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

    public function is_admin()
    {
        if ($this->role == '1') {
            return true;
        }
        return false;
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'user_id', 'id');
    }

    public function currentCountry()
    {
        return $this->belongsTo('App\Models\Country', 'curr_country_id', 'id');
    }

    public function state()
    {
        return $this->hasOne('App\Models\State', 'id', 'curr_state_id');
    }

    public function city()
    {
        return $this->hasOne('App\Models\City', 'id');
    }
}
