<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Kriteria;
use App\NilaiKriteriaAlternatif;
use App\NilaiAlternatif;
use DB;


class NilaiAlternatifController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $Kriteria = Kriteria::All();
      $NilaiAlternatif = NilaiAlternatif::with('get_alternatif')->with('get_nilai_kriteria_alternatif')->orderBy('id_alternatif','ASC')->orderBy('id_kriteria','ASC')->get();
      $tes = DB::table('supplier')
            ->join('nilai_alternatif', 'supplier.id_supplier', '=', 'nilai_alternatif.id_alternatif')
            ->join('jenis_produk', 'supplier.id_jenis', '=', 'jenis_produk.id_jenis_produk')
            ->join('nilai_kriteria_alternatif', 'nilai_alternatif.nilai', '=', 'nilai_kriteria_alternatif.id_nilai_kriteria_alternatif')
            ->select('supplier.nama_supplier', 'jenis_produk.nama_jenis_produk', 'supplier.id_supplier' , 'nilai_kriteria_alternatif.nilai', 'nilai_kriteria_alternatif.keterangan')
            ->orderBy('supplier.id_supplier')
            ////////////////////// tambahan
            ->orderBy('nilai_alternatif.id_kriteria')
            ->orderBy('nilai_kriteria_alternatif.kriteria')
            /////////////////
            ->get();

            $Alternatif = Supplier::All();
            $jmlk = Kriteria::All()->count();

            //////////////////////////////////////
            // $tes1 = DB::table('supplier')
            //       ->join('nilai_alternatif', 'supplier.id_supplier', '=', 'nilai_alternatif.id_alternatif')
            //       ->join('jenis_produk', 'supplier.id_jenis', '=', 'jenis_produk.id_jenis_produk')
            //       ->join('nilai_kriteria_alternatif', 'nilai_alternatif.nilai', '=', 'nilai_kriteria_alternatif.id_nilai_kriteria_alternatif')
            //       ->select('supplier.nama_supplier')
            //       ->count();
            //       $jumlahs = $tes1/$jmlk;
            //       echo $jumlahs;
            //
            //       if ($jumlahs == $jmlk) {
            //         $chunk1 = $jmlk;
            //       }else {
            //         $chunk1 = $jmlk-1;
            //       }
                  ///////////////////////////////////////////////

      return view('menu.NilaiAlternatif.nilai_alternatif', compact ('Alternatif', 'NilaiAlternatif','Kriteria','tes','jmlk'));
    }

    public function index1(){
      $Kriteria = Kriteria::All();
      $NilaiAlternatif = NilaiAlternatif::with('get_alternatif')->orderBy('id_alternatif','ASC')->orderBy('id_kriteria','ASC')->get();
      $Alternatif = Supplier::All();

      $tes1 = Supplier::with('get_supplier')->with('get_suppliernilai')->get();
      //echo $tes1;


      return view('menu.NilaiAlternatif.nilai_alternatif_table_input', compact ('Alternatif', 'NilaiAlternatif','Kriteria','tes1'));

    }

    public function input($id){
      $Kriteria = Kriteria::All();
      $Alternatif = Supplier::where('id_supplier',$id)->get();
      $NilaiKriteriaAlternatif = NilaiKriteriaAlternatif::with('get_kriteria')->orderBy('nilai','ASC')->get();
      return view('menu.NilaiAlternatif.nilai_alternatif_input', compact ('Alternatif','Kriteria','NilaiKriteriaAlternatif'));

    }

    public function input2(Request $request){

      $JmlKriteria = Kriteria::count();

      for($i = 1; $i <= $JmlKriteria; $i++){
        //echo $JmlKriteria;

        $nilai='n'.$i;
        $idk='i'.$i;
        $id= $request->id.$i;
        //echo $request->i.$i;
        echo $id;
        //echo $request->$nilai;

        if($update = NilaiAlternatif::find($id)){
          $update->id_kriteria = $request->$idk;
          $update->id_alternatif = $request->id;
          $update->nilai = $request->$nilai;
          $update->save();


        }else{

        $input = new NilaiAlternatif;
        $input->id_nilai_alternatif = $id;
        $input->id_kriteria = $request->$idk;
        $input->id_alternatif = $request->id;
        $input->nilai = $request->$nilai;
        $input->save();}
      }


      return redirect('/NilaiAlternatif')->with('status','Berhasil Diedit!');


    }


    public function edit($id){
      $Kriteria = Kriteria::All();
      $NilaiKriteriaAlternatif = NilaiKriteriaAlternatif::with('get_kriteria')->orderBy('nilai','ASC')->get();
      $Alternatif = Supplier::where('id_supplier',$id)->get();
      $NilaiAlternatif = NilaiAlternatif::where('id_alternatif',$id)->with('get_nilai_kriteria_alternatif')->get();
      return view('menu.NilaiAlternatif.nilai_alternatif_edit ', compact ('NilaiAlternatif','Kriteria','NilaiKriteriaAlternatif','Alternatif'));
    }


}
