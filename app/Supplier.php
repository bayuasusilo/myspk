<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    public $table = "supplier";

    protected $primaryKey = 'id_supplier';

    protected $fillable = [

      'nama_supplier','alamat_supplier','tlpn_supplier','id_jenis'
    ];

    //relasi many to one
    public function get_supplier(){
      return $this->belongsTo('App\JenisProduk', 'id_jenis', 'id_jenis_produk');
    }

    //relasi one to many
    public function get_suppliernilai(){
      return $this->belongsTo('App\NilaiAlternatif', 'id_supplier', 'id_alternatif');
    }

}
