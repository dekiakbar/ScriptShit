<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $fillable = ['nama_tanaman'];
    protected $table = 'tanaman';

    public function suhu()
    {
    	return $this->hasMany('App\SuhuS');
    }

    public function ph()
    {
    	return $this->hasMany('App\PhS');
    }

    public function lembab()
    {
    	return $this->hasMany('App\LembabS');
    }

    public function curahHujan()
    {
    	return $this->hasMany('App\CurahHujanS');
    }
}
