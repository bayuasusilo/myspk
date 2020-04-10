<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HasilDetail;
use App\Hasil;

use PDF;

class LaporanController extends Controller
{
    //lap1
    public function index($id)
    {
      $ID = $id;
    	$HasilDetail = HasilDetail::where('id_hasil',$id)->where('status','1')->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();

      return view('menu.Laporan.Laporan1', compact ('HasilDetail','ID','hasil'));
    }

    public function cetak_pdf($id)
    {
      $ID = $id;
      $HasilDetail = HasilDetail::where('id_hasil',$id)->where('status','1')->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();

    	$pdf = PDF::loadview('menu.Laporan.Laporan1_pdf', compact ('HasilDetail','ID','hasil'));
    	return $pdf->stream();
    }

    //lap2
    public function index2($id)
    {
      $ID = $id;
      $HasilDetail = HasilDetail::where('id_hasil',$id)->where('status','0')->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();
      return view('menu.Laporan.Laporan2', compact ('HasilDetail','ID','hasil'));
    }

    public function cetak_pdf2($id)
    {
      $ID = $id;
      $HasilDetail = HasilDetail::where('id_hasil',$id)->where('status','0')->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();

      $pdf = PDF::loadview('menu.Laporan.Laporan2_pdf', compact ('HasilDetail','ID','hasil'));
      return $pdf->stream();
    }

    //lap3
    public function index3($id)
    {
      $ID = $id;
      $HasilDetail = HasilDetail::where('id_hasil',$id)->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();
      return view('menu.Laporan.Laporan3', compact ('HasilDetail','ID','hasil'));
    }

    public function cetak_pdf3($id)
    {
      $ID = $id;
      $HasilDetail = HasilDetail::where('id_hasil',$id)->with('get_supplier1')->get();
      $hasil = Hasil::where('id_hasil',$id)->with('get_jenisproduk')->get();

      $pdf = PDF::loadview('menu.Laporan.Laporan3_pdf', compact ('HasilDetail','ID','hasil'));
      return $pdf->stream();
    }
}
