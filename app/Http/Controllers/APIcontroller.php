<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gmopx\LaravelOWM\LaravelOWM;

class APIcontroller extends Controller
{
    public function cuaca()
    {
    	$lowm = new LaravelOWM();
    	$query = 'sukabumi';
    	$current_weather = $lowm->getCurrentWeather($query, $lang = 'id', $units = 'metric', $cache = false);

    	$data=dd($current_weather);

    	return view('cuaca',compact('data'));
    }
}
