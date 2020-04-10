<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilDetail extends Model
{
    //
    public $table = "hasil_detail";

    protected $primaryKey = 'id_hasil_detail';

    protected $fillable = [

      'id_hasil','id_alternatif','total'
    ];

    //relasi many to one
    public function get_supplier1  (){
      return $this->belongsTo('App\Supplier', 'id_alternatif', 'id_supplier');
    }
}
