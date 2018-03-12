<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LembabS extends Model
{
    protected $fillable = ['id_tanaman','lembabS1','lembabS2','lembabS3','lembabN'];
    protected $table = 'lembabS';
}
