<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiAlternatif extends Model
{
    //
    public $table = "nilai_alternatif";

    protected $primaryKey = 'id_nilai_alternatif';

    protected $fillable = [

      'id_kriteria','id_alternatif','nilai'
    ];

    //relasi many to one
    public function get_kriteria(){
      return $this->belongsTo('App\Kriteria', 'id_kriteria', 'id_kriteria');
    }

    //relasi many to one
    public function get_alternatif(){
      return $this->belongsTo('App\Supplier', 'id_alternatif', 'id_supplier');
    }

    //relasi many to one
    public function get_nilai_kriteria_alternatif(){
      return $this->belongsTo('App\NilaiKriteriaAlternatif', 'nilai', 'id_nilai_kriteria_alternatif');
    }
}
