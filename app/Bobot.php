<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    //
    public $table = "bobot";

    protected $primaryKey = 'id_bobot';

    protected $fillable = [

      'nilai'
    ];
}
