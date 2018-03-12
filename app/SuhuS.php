<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuhuS extends Model
{
    protected $fillable = ['id_tanaman','suhuS1','suhuS2','suhuS3','suhuN'];
    protected $table = 'suhuS';
}
