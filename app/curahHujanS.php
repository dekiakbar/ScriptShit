<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curahHujanS extends Model
{
    protected $fillable = ['id_tanaman','curahS1','curahS2','curahS3','curahN'];
    protected $table = 'curahHujanS';
}
