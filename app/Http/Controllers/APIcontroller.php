<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gmopx\LaravelOWM\LaravelOWM;
use Mapper;
use SKAgarwal\GoogleApi\PlacesApi;

class APIcontroller extends Controller
{
    public function cuaca()
    {
    	$owm = new LaravelOWM();
    	$kunci = 'sukabumi';
    	$data = $owm->getCurrentWeather($kunci, $lang = 'id', $units = 'metric', $cache = false);

    	$idKota = $data->city->id;
    	$namaKota = $data->city->name;
    	return view('cuaca',compact('data'));
    }

    public function tempat()
    {
  		Mapper::map(-6.9419491, 106.9327932);
		
		Mapper::informationWindow(-6.9353775, 106.9329091, 'Content');
		Mapper::informationWindow(-6.9353775, 106.9329091, 'Content', ['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);

		Mapper::streetview(-6.9419491, 106.9327932, 1, 1);
		return view('cuaca');
    }

    public function Geolokasi()
    {
    	$items = app('geocoder')->geocode('sukabumi,jawa barat,ID')->get();
    	$id = $items->first()->getId();
    	$alamat = $items->first()->getFormattedAddress();
    	$lat = $items->first()->getCoordinates()->getLatitude();
    	$long = $items->first()->getCoordinates()->getLongitude();
    	return view('cuaca',compact('items'));
    }	
}
