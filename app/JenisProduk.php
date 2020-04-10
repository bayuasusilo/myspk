<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class JenisProduk extends Model
{
    //
    public $table = "jenis_produk";
    use Sortable;

    protected $primaryKey = 'id_jenis_produk';

    protected $fillable = [

      'nama_jenis_produk',
    ];

    public $sortable = ['id_jenis_produk','nama_jenis_produk'];


}
