<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phS extends Model
{
    protected $fillable = ['id_tanaman','phS1','phS2','phS3','phN'];
    protected $table = 'phS';
}
