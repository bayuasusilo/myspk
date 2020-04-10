<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
    public $table = "kriteria";

    protected $primaryKey = 'id_kriteria';

    protected $fillable = [

      'nama_kriteria','bobot_kriteria','atribut_kriteria'
    ];
}
