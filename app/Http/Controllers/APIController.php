<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use DB;

class APIController extends Controller
{
    public function index()
    {
        $countries = DB::Country()->pluck("name", "id");
        return view('countrys', compact('countries'));
    }

    public function getStateList(Country $country, State $state)
    {
        $states = State::where("country_id", $country->id)->pluck("name", "id");
        return response()->json($states);
    }

    public function getCityList(State $state)
    {
        $cities = City::where("state_id", $state->id)->pluck("name", "id");
        return response()->json($cities);
    }

    public function countrycodes(Country $country)
    {
        return response()->json($country);
    }
}
