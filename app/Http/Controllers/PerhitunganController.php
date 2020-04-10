<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisProduk;
use App\Kriteria;
use App\Supplier;
use App\Hasil;
use App\HasilDetail;
use DB;




class PerhitunganController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

      $JenisProduk = JenisProduk::All();
      return view('menu.Perhitungan.perhitungan', compact('JenisProduk'));
    }


    public function input(Request $request){
      $jmlk = Kriteria::All()->count();
      $Kriteria = Kriteria::All();
      $j=$request->jenisproduk;
      $Supplier = Supplier::where('id_jenis', $request->jenisproduk)->get();
      $JmlSupplier = Supplier::where('id_jenis', $request->jenisproduk)->count();
      $JmlSupplier1 = $Tablenilai = DB::table('supplier')
                  ->leftjoin('nilai_alternatif', 'supplier.id_supplier', '=', 'nilai_alternatif.id_alternatif')
                  ->select('supplier.*', 'nilai_alternatif.*')
                  ->where('supplier.id_jenis', '=', $request->jenisproduk)
                  ->whereNull('nilai_alternatif.id_alternatif')
                  ->count();
      // echo $JmlSupplier;
      // echo $JmlSupplier1;
      $JmlSupplier=$JmlSupplier-$JmlSupplier1;
      //join table supplier dan nilai alternatif
      $Tablenilai = DB::table('supplier')
                  ->join('nilai_alternatif', 'supplier.id_supplier', '=', 'nilai_alternatif.id_alternatif')
                  ->join('kriteria', 'nilai_alternatif.id_kriteria', '=', 'kriteria.id_kriteria')
                  ->join('nilai_kriteria_alternatif', 'nilai_alternatif.nilai', '=', 'nilai_kriteria_alternatif.id_nilai_kriteria_alternatif')
                  ->select('supplier.nama_supplier', 'supplier.id_supplier' , 'kriteria.*', 'nilai_kriteria_alternatif.*')
                  ->where('supplier.id_jenis', '=', $request->jenisproduk)
                  ->orderBy('supplier.id_supplier','ASC')
                  ->orderBy('kriteria.id_kriteria','ASC')
                  ->get();

//////////////////////////////////////
    // $Tablenilai1 = DB::table('supplier')
    //             ->join('nilai_alternatif', 'supplier.id_supplier', '=', 'nilai_alternatif.id_alternatif')
    //             ->join('kriteria', 'nilai_alternatif.id_kriteria', '=', 'kriteria.id_kriteria')
    //             ->join('nilai_kriteria_alternatif', 'nilai_alternatif.nilai', '=', 'nilai_kriteria_alternatif.id_nilai_kriteria_alternatif')
    //             ->select('supplier.nama_supplier', 'supplier.id_supplier' , 'kriteria.*', 'nilai_kriteria_alternatif.*')
    //             ->where('supplier.id_jenis', '=', $request->jenisproduk)
    //             ->orderBy('supplier.id_supplier','ASC')
    //             ->orderBy('kriteria.id_kriteria','ASC')
    //             ->count();
    //   $jumlahs = $Tablenilai1/$JmlSupplier;
    //   echo $jumlahs;
    //
    //   if ($jumlahs == $jmlk) {
    //     $jmlk = $jmlk;
    //   }else {
    //     $jmlk = $jmlk-1;
    //   }
      ///////////////////////////////////////////////
      // $rank = 1;
      // foreach ($Supplier as $key => $value0) {
      //   // code...
      //   $Total1=0;
      //
      // //////////////////
      // foreach ($Tablenilai as $key => $value) {
      //   // echo ('-sup-');
      //   // echo $value->id_supplier;
      //   // echo ('-nilai-');
      //   // echo $value->nilai;
      //   // echo ('--');
      //   // echo $value->atribut_kriteria;
      //   // echo ('--');
      //
      //   $max=$value->nilai;
      //   $min=$value->nilai;
      //
      //   foreach ($Tablenilai as $key => $value2) {
      //     if($value->id_kriteria == $value2->id_kriteria){
      //     //echo $value2->nilai;
      //       if($value->atribut_kriteria == 1){
      //         if($value2->nilai > $max){
      //         $max=$value2->nilai;}
      //       }else{
      //         if($value2->nilai < $min){
      //         $min=$value2->nilai;}
      //       }
      //     //echo ('//');
      //   }
      //   }
      //
      //   if($value->atribut_kriteria == 1){
      //   //echo ('-max :');
      //   //echo $max;
      //
      //   $nilai = $value->nilai / $max;
      // }else{
      //   //echo ('-min :');
      //   //echo $min;
      //
      //   $nilai = $min / $value->nilai;
      // }
      //   //echo ('hasil :');
      //   //echo $nilai;
      //   //echo ('------');
      //
      //   ////////////////////
      //   $hasil = $nilai * $value->bobot_kriteria;
      //   //echo $hasil;
      //
      //   if($value->id_supplier == $value0->id_supplier){
      //     $Total1= $Total1+$hasil;
      //   }
      // }
      //
      // echo $rank;
      // echo $value0->nama_supplier;
      // echo ('Total : ');
      // echo $Total1;
      // $rank=$rank+1;
      // }




      return view('menu.Perhitungan.hitungtable',compact('Kriteria','Tablenilai','Supplier','JmlSupplier','j','jmlk'));
    }


    public function simpan(Request $request){

      $Hasil = Hasil::where('id_hasil', $request->kd)->count();


      if ($Hasil >= 1) {
        return redirect('/Perhitungan')->with('gagal','Gagal Disimpan Karena data Sudah dihitung!');
      }else {
        $input = new hasil;
        $input->id_hasil = $request->kd;
        $input->jenis_produk = $request->kj;
        $input->bulan = $request->m;
        $input->tahun = $request->y;
        $input->save();


        for ($i=1; $i <= $request->jml; $i++) {
          // code...
          $ida= 'id' .$i;
          $total= 'total' .$i;
          $input = new HasilDetail;
          $input->id_hasil = $request->kd;
          $input->id_alternatif = $request->$ida;
          $input->total = $request->$total;
          $input->save();
        }
      }


      // $input = new hasil;
      // $input->id_hasil = $request->kd;
      // $input->jenis_produk = $request->kj;
      // $input->bulan = $request->m;
      // $input->tahun = $request->y;
      // $input->save();
      //
      //
      // for ($i=1; $i <= $request->jml; $i++) {
      //   // code...
      //   $ida= 'id' .$i;
      //   $total= 'total' .$i;
      //   $input = new HasilDetail;
      //   $input->id_hasil = $request->kd;
      //   $input->id_alternatif = $request->$ida;
      //   $input->total = $request->$total;
      //   $input->save();
      // }


      $JMHD = HasilDetail::where('id_hasil', $request->kd)->count();
      $HasilDetail = HasilDetail::where('id_hasil', $request->kd)->with('get_supplier1')->orderBy('total','DESC')->get();
      //echo $HasilDetail;
      return view('menu.Perhitungan.pemilihan', compact('HasilDetail','JMHD'));
    }


    public function simpan2(Request $request){


      for ($i=1; $i <= $request->jmhd; $i++) {
        if ($update = HasilDetail::find($request["id".$i])) {
          // code...
          $update->status = "1";
          $update->save();
        }

      }
      return redirect('/Perhitungan')->with('status','Berhasil Dipilih!');
    }

}
