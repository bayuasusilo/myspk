<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\JenisProduk;
use DB;

class SupplierController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){

    $JenisProduk = JenisProduk::All();
    $Supplier = Supplier::with('get_supplier')->get();
    return view('menu.Supplier.Supplier', compact ('JenisProduk','Supplier'));
  }

  public function input(Request $request){
    $input = new Supplier;
    $input->nama_supplier = $request->nama;
    $input->alamat_supplier = $request->alamat;
    $input->tlpn_supplier = $request->tlpn;
    $input->id_jenis = $request->jenisproduk;
    $input->save();


    return back()->with('status','Berhasil Disimpan!');
  }

  public function edit($id){
    $JenisProduk = JenisProduk::All();
    $Supplier = Supplier::where('id_Supplier',$id)->with('get_supplier')->get();
    return view('menu.Supplier.SupplierEdit ', compact ('JenisProduk','Supplier'));
  }


  public function update(Request $request){


    $update = Supplier::find($request["id"]);
    $update->nama_supplier = $request->nama;
    $update->alamat_supplier = $request->alamat;
    $update->tlpn_supplier = $request->tlpn;
    $update->id_jenis = $request->jenisproduk;
    $update->save();

    return redirect('/Supplier')->with('status','Berhasil Diedit!');


  }

  public function delete($id){

    $delete = Supplier::find($id);
    $delete->delete();
    DB::table('nilai_alternatif')->where('id_alternatif',$id)->delete();
    DB::table('hasil_detail')->where('id_alternatif',$id)->delete();

    return redirect('/Supplier')->with('status','Berhasil Dihapus!');
  }

}
