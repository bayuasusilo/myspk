<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil;


class LapGrafikAltController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


      $Hasil = Hasil::with('get_jenisproduk')->orderBy('created_at','DESC')->get();
      return view('menu.LapGrafikAlt.LapGrafikAlt', compact('Hasil'));
    }
}
