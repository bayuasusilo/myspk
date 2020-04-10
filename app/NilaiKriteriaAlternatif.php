<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKriteriaAlternatif extends Model
{
    //
    public $table = "nilai_kriteria_alternatif";

    protected $primaryKey = 'id_nilai_kriteria_alternatif';

    protected $fillable = [

      'kriteria','keterangan','nilai'
    ];

    //relasi many to one
    public function get_kriteria(){
      return $this->belongsTo('App\Kriteria', 'kriteria', 'id_kriteria');
    }
}
