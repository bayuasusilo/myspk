<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiKriteriaAlternatif;
use App\Kriteria;

class NilaiKriteriaAlternatifController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $Kriteria = Kriteria::All();
      $NilaiKriteriaAlternatif = NilaiKriteriaAlternatif::with('get_kriteria')->orderBy('kriteria','ASC')->orderBy('nilai','ASC')->get();
      return view('menu.NilaiKriteriaAlternatif.nilai_kriteria_alternatif', compact ('Kriteria','NilaiKriteriaAlternatif'));

    }


    public function input(Request $request){
      $input = new NilaiKriteriaAlternatif;
      $input->kriteria = $request->kriteria;
      $input->keterangan = $request->nama;
      $input->nilai = $request->nilai;
      $input->save();

      return back()->with('status','Berhasil Disimpan!');
    }

    public function edit($id){
      $NilaiKriteriaAlternatif = NilaiKriteriaAlternatif::where('id_nilai_kriteria_alternatif',$id)->with('get_kriteria')->get();
      return view('menu.NilaiKriteriaAlternatif.nilai_kriteria_alternatif_edit', compact ('NilaiKriteriaAlternatif'));

    }

    public function update(Request $request){


      $update = NilaiKriteriaAlternatif::find($request["id"]);
      $update->keterangan = $request->keterangan;
      $update->nilai = $request->nilai;
      $update->save();

      return redirect('/NilaiKriteriaAlternatif')->with('status','Berhasil Diedit!');


    }



      public function delete($id){

        $delete = NilaiKriteriaAlternatif::find($id);
        $delete->delete();

        return redirect('/NilaiKriteriaAlternatif')->with('status','Berhasil Dihapus!');
      }


}
