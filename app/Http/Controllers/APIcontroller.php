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
    	
    	// pengolahan data API dari Open Weather Map
    	$owm 		= new LaravelOWM();
    	$cuacaJson 	= $owm->getCurrentWeather($geolokasi, $lang = 'en', $units = 'metric', $cache = false);
    	$suhu		= $cuacaJson->temperature->now;
    	$kelembaban	= $cuacaJson->humidity;
    	$arahAngin	= $cuacaJson->wind->direction;
    	$kecAngin	= $cuacaJson->wind->speed;
    	$tekUdara	= $cuacaJson->pressure;
    	$cuaca 		= $cuacaJson->weather->description;

    	$hasil 	= TarahAngin($arahAngin);
    	// $arahAngin 	= explode(' ',$arahAngin);
    	// if ($arahAngin[1] == 'N') {
    	//  	$arahAngin[1] = 'Utara';
    	// }elseif ($arahAngin[1] == 'NE') {
    	// 	$arahAngin[1] = 'Timur Laut';
    	// }elseif ($arahAngin[1] == 'E') {
    	// 	$arahAngin[1] = 'Timur';
    	// }elseif ($arahAngin[1] == 'SE') {
    	// 	$arahAngin[1] = 'Tenggara';
    	// }elseif ($arahAngin[1] == 'S') {
    	// 	$arahAngin[1] = 'Selatan';
    	// }elseif ($arahAngin[1] == 'SW') {
    	// 	$arahAngin[1] = 'Barat Daya';
    	// }elseif ($arahAngin[1] == 'W') {
    	// 	$arahAngin[1] = 'Barat';
    	// }elseif ($arahAngin[1] == 'NW') {
    	// 	$arahAngin[1] = 'Barat Laut';
    	// }elseif ($arahAngin[1] == 'WNW') {
    	// 	$arahAngin[1] = 'Barat Barat Laut';
    	// }elseif ($arahAngin[1] == 'NNE') {
    	// 	$arahAngin[1] = 'Utara Timur Laut';
    	// }elseif ($arahAngin[1] == 'ENE') {
    	// 	$arahAngin[1] = 'Timur Timur Laut';
    	// }elseif ($arahAngin[1] == 'ESE') {
    	// 	$arahAngin[1] = 'Timur Tenggara';
    	// }elseif ($arahAngin[1] == 'SSE') {
    	// 	$arahAngin[1] = 'Selatan Tenggara';
    	// }elseif ($arahAngin[1] == 'SSW') {
    	// 	$arahAngin[1] = 'Selatan Barat Daya';
    	// }elseif ($arahAngin[1] == 'WSW') {
    	// 	$arahAngin[1] = 'Barat Barat Daya';
    	// }elseif ($arahAngin[1] == 'NNW') {
    	// 	$arahAngin[1] = 'Utara Barat Laut';
    	// }

    	// $arahAngin = $arahAngin[0].' '.$arahAngin[1];

    	$kondisi = array(
    		'suhu' => $suhu,
    		'kelembaban' => $kelembaban,
    		'arahAngin' => $hasil,
    		'kecAngin' => $kecAngin,
    		'tekUdara' => $tekUdara,
    		'cuaca' => $cuaca, 
    	);
    	$kondisi = (object) $kondisi;
    	// ==============================
    	

    	// $ramalan = $owm->getWeatherForecast($geolokasi, $lang = 'id', $units = 'metric', $days = 5, $cache = false, $time = 600);

    	Mapper::map($lat, $long,['zoom' => '18','markers' => ['title' => 'Lokasi']]);

    	return view('detail',compact('kondisi','lokasi'));

    	// dd($ramalan);
    	// return view('detail');
    }
}