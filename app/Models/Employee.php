<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function currentState()
    {
        return $this->belongsTo('App\Models\State', 'curr_state_id', 'id');
    }

    public function currentCountry()
    {
        return $this->belongsTo('App\Models\Country', 'curr_country_id', 'id');
    }

    public function currentCity()
    {
        return $this->belongsTo('App\Models\City', 'curr_city_id', 'id');
    }

    public function permaState()
    {
        return $this->belongsTo('App\Models\State', 'perma_state_id', 'id');
    }

    public function permaCountry()
    {
        return $this->belongsTo('App\Models\Country', 'perma_country_id', 'id');
    }

    public function permaCity()
    {
        return $this->belongsTo('App\Models\City', 'perma_city_id', 'id');
    }

}
