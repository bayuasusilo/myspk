<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    public $table = "nilai";

    protected $primaryKey = 'id_nilai';

    protected $fillable = [

      'nilai','keterangan_nilai'
    ];

}
