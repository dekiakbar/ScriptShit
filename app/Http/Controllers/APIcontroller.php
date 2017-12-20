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
    	dd($data);
    	$idKota = $data->city->id;
    	$namaKota = $data->city->name;
    	return view('cuaca',compact('data'));
    }

    public function Visualisasitempat()
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
    	dd($items);
    	return view('cuaca',compact('items'));
    }	

    public function semua($lokasi)
    {
    	$lok = explode(',', $lokasi);
    	$lat = $lok[0];
    	$long = $lok[1];
    	$geolokasi = array("lat" => $lok[0],"lon" => $lok[1]);

    	$geo = app('geocoder')->reverse($lat,$long)->get();
    	$namaKota = $geo->first()->getLocality();

    	$owm = new LaravelOWM();
    	$cuaca = $owm->getCurrentWeather($geolokasi, $lang = 'id', $units = 'metric', $cache = false);

    	Mapper::map($lat, $long,['zoom' => '18','markers' => ['title' => 'Lokasi']]);

    	return view('detail',compact('cuaca','geo','lokasi'));

    }
}
