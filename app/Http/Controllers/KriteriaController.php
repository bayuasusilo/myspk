<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\NilaiKriteriaAlternatif;
use App\NilaiAlternatif;
use DB;


class KriteriaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $Kriteria = Kriteria::All();
      return view('menu.Kriteria.Kriteria', compact ('Kriteria'));

    }

    public function input(Request $request){
      DB::table('bobot')->truncate();
      $jum = Kriteria::All()->count();

      $input = new Kriteria;
      $input->id_kriteria = $jum+1;
      $input->nama_kriteria = $request->nama;
      $input->atribut_kriteria = '1';
      $input->save();

///////////////////////////////tambahan otomatis tambah data NilaiKriteriaAlternatif, NilaiAlternatif ketika input kriteria
      $input = new NilaiKriteriaAlternatif;
      $input->kriteria = $jum+1;
      $input->keterangan = 'Default';
      $input->nilai = 1;
      $input->save();

      $idnka = NilaiKriteriaAlternatif::where('kriteria', $jum+1)->get();
      $supp = NilaiAlternatif::orderBy('id_alternatif','ASC')->get();

      $x=0;
      foreach ($supp as $key => $value) {
        // code...
        //echo $value->id_alternatif;
        foreach ($idnka as $key => $value1) {
          // code...
          if ($x == $value->id_alternatif) {
            // code...
          }else{
          $input = new NilaiAlternatif;
          $input->id_kriteria = $jum+1;
          $input->id_alternatif = $value->id_alternatif;
          $input->nilai = $value1->id_nilai_kriteria_alternatif;
          $input->save();

          $x=$value->id_alternatif;
          }
        }
      }
//////////////////////////////////////////

      return back()->with('status','Berhasil Disimpan!');
    }

    public function edit($id){
      $Kriteria = Kriteria::where('id_kriteria',$id)->get();
      return view('menu.Kriteria.KriteriaEdit ', compact ('Kriteria'));
    }


    public function update(Request $request){


      $update = Kriteria::find($request["id"]);
      $update->nama_kriteria = $request->nama;
      $update->atribut_kriteria = $request->atribut;
      $update->save();

      return redirect('/Kriteria')->with('status','Berhasil Diedit!');


    }

    public function delete($id){

      DB::table('bobot')->truncate();
      DB::table('nilai_alternatif')->where('id_kriteria',$id)->delete();
      DB::table('nilai_kriteria_alternatif')->where('kriteria',$id)->delete();
      $delete = Kriteria::find($id);
      $delete->delete();

      return redirect('/Kriteria')->with('status','Berhasil Dihapus!');
      }

}
