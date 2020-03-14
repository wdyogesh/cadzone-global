<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function state()
    {
        return $this->hasOne('App\Models\State', 'id');
    }

    public function country()
    {
        return $this->hasOne('App\Models\Country', 'id');
    }

    public function city()
    {
        return $this->hasOne('App\Models\City', 'id');
    }
}
