<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;

class NilaiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $Nilai = Nilai::All();
      return view('menu.Nilai.Nilai', compact ('Nilai'));

    }


      public function edit($id){
        $Nilai = Nilai::where('id_nilai',$id)->get();
        return view('menu.Nilai.NilaiEdit ', compact ('Nilai'));
      }


      public function update(Request $request){


        $update = Nilai::find($request["id"]);
        $update->nilai = $request->nilai;
        $update->keterangan_nilai = $request->ket_nilai;
        $update->save();

        return redirect('/Nilai')->with('status','Berhasil Diedit!');


      }


}
