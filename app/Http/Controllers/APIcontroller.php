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

    public function semua($koordinat)
    {
    	$lok = explode(',', $koordinat);
    	$lat = $lok[0];
    	$long = $lok[1];
    	$geolokasi = array("lat" => $lok[0],"lon" => $lok[1]);

    	$lokjson = app('geocoder')->reverse($lat,$long)->get();

    	$negara = $lokjson->first()->getPolitical();
    	$provinsi = $lokjson->first()->getAdminLevels()->first()->getName();
    	$kota = $lokjson->first()->getAdminLevels()->get(2)->getName();
    	$kecamatan = $lokjson->first()->getAdminLevels()->get(3)->getName();
    	$kelurahan = $lokjson->first()->getAdminLevels()->get(4)->getName();
    	$alamat = $lokjson->first()->getFormattedAddress();
    	$data = array(
    		'negara'	=>	$negara,
			'provinsi'	=>	$provinsi,
			'kota'		=>	$kota,
			'kecamatan' =>	$kecamatan,
			'kelurahan' =>	$kelurahan,
			'alamat' 	=>	$alamat
    	);
    	$lokasi = (object) $data;

    	$owm = new LaravelOWM();
    	$cuaca = $owm->getCurrentWeather($geolokasi, $lang = 'id', $units = 'metric', $cache = false);
    	// $ramalan = $owm->getWeatherForecast($geolokasi, $lang = 'id', $units = 'metric', $days = 5, $cache = false, $time = 600);

    	Mapper::map($lat, $long,['zoom' => '18','markers' => ['title' => 'Lokasi']]);

    	return view('detail',compact('cuaca','lokasi'));

    	// dd($ramalan);
    	// return view('detail');
    }
}
