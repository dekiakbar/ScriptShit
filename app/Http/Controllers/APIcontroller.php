<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gmopx\LaravelOWM\LaravelOWM;
use Mapper;

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
    	return view('debug',compact('data'));
    }

    public function Visualisasitempat()
    {
    	Mapper::map(-6.9419491, 106.9327932);

  		Mapper::informationWindow(-6.9353775, 106.9329091, 'Content');
  		Mapper::informationWindow(-6.9353775, 106.9329091, 'Content', ['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);

  		Mapper::streetview(-6.9419491, 106.9327932, 1, 1);
  		return view('debug');
    }

    public function Geolokasi()
    {
    	$items = app('geocoder')->geocode('sukabumi,jawa barat,ID')->get();
    	$id = $items->first()->getId();
    	$alamat = $items->first()->getFormattedAddress();
    	$lat = $items->first()->getCoordinates()->getLatitude();
    	$long = $items->first()->getCoordinates()->getLongitude();
    	dd($items);
    	return view('debug',compact('items'));
    }

    public function semua($koordinat)
    {	
    	// pengolahan data Geolokasi dari pencarian JS
    	$lok 		= explode(',', $koordinat);
    	$lat 		= $lok[0];
    	$long 		= $lok[1];
    	$geolokasi 	= array("lat" => $lok[0],"lon" => $lok[1]);
    	// ==============================
    	
    	//pengolhana data API dari google
    	$lokjson	= app('geocoder')->reverse($lat,$long)->get();
    	$negara 	= $lokjson->first()->getPolitical();
    	$provinsi 	= $lokjson->first()->getAdminLevels()->first()->getName();
    	$kota 		= $lokjson->first()->getAdminLevels()->get(2)->getName();
    	$kecamatan 	= $lokjson->first()->getAdminLevels()->get(3)->getName();
    	$kelurahan 	= $lokjson->first()->getAdminLevels()->get(4)->getName();
    	$alamat 	= $lokjson->first()->getFormattedAddress();
    	$data = array(
    		'negara'	=>	$negara,
			'provinsi'	=>	$provinsi,
			'kota'		=>	$kota,
			'kecamatan' =>	$kecamatan,
			'kelurahan' =>	$kelurahan,
			'alamat' 	=>	$alamat
    	);
    	$lokasi 	= (object) $data;
    	// ==============================
    	
    	// pengolahan data cuaca API dari Open Weather Map
    	$owm 		= new LaravelOWM();
    	$cuacaJson 	= $owm->getCurrentWeather($geolokasi, $lang = 'en', $units = 'metric', $cache = false);
    	$suhu		= $cuacaJson->temperature->now;
    	$kelembaban	= $cuacaJson->humidity;
    	$arahAngin	= $cuacaJson->wind->direction;
    	$kecAngin	= $cuacaJson->wind->speed;
    	$tekUdara	= $cuacaJson->pressure;
    	$cuaca 		= $cuacaJson->weather->description;
    	$Harah 		= TarahAngin($arahAngin);
    	$Hcuaca 	= Tcuaca($cuaca);

    	$kondisi 	= array(
    		'suhu'		=> $suhu,
    		'kelembaban'=> $kelembaban,
    		'arahAngin' => $Harah,
    		'kecAngin' 	=> $kecAngin,
    		'tekUdara' 	=> $tekUdara,
    		'cuaca' 	=> $Hcuaca, 
    	);
    	$kondisi 	= (object) $kondisi;
    	// ==============================

    	// pengolahan data MAP dari Google map API
    	Mapper::map($lat, $long,['zoom' => '18','markers' => ['title' => 'Lokasi']]);
    	// ==============================
    	
    	// Pengolahan data Elevasi dari google elvation API
    	$elevasiApi = \GoogleMaps::load('elevation')->setParamByKey('locations', $lat.','.$long)->get();
    	$arElevasi 	= json_decode($elevasiApi);
    	$elevasi 	= round($arElevasi->results[0]->elevation, 2).' mdpl';
    	$resolusi 	= round($arElevasi->results[0]->resolution, 2).' Meter';
    	$kemiringan	= array(
    		'elevasi'	=> $elevasi,
    		'resolusi'	=> $resolusi
    	);
    	$kemiringan = (object) $kemiringan;
    	// ==============================
    	
		return view('detail',compact('kondisi','lokasi','kemiringan'));
    	// $ramalan 	= $owm->getWeatherForecast($geolokasi, $lang = 'en', $units = 'metric', $days = 5, $cache = false, $time = 600);
    	// dd($ramalan);
    	
    	
    }
}