<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanaman extends Model
{
    protected $fillable = ['nama_tanaman'];
    protected $table = 'tanaman';

    public function suhu()
    {
    	return $this->hasMany('App\suhuS');
    }

    public function ph()
    {
    	return $this->hasMany('App\phS');
    }

    public function lembab()
    {
    	return $this->hasMany('App\lembabS');
    }

    public function curahHujan()
    {
    	return $this->hasMany('App\curahHujanS');
    }
}
