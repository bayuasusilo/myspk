<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    //
    public $table = "hasil";

    protected $primaryKey = 'id_hasil';

    protected $fillable = [

      'id_hasil','jenis_produk','bulan','tahun'
    ];


    //relasi many to one
    public function get_jenisproduk(){
      return $this->belongsTo('App\JenisProduk', 'jenis_produk', 'id_jenis_produk');
    }
}
