<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisProduk;
use App\Supplier;

class JenisProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

      $JenisProduk = JenisProduk::All();
      return view('menu.JenisProduk.JenisProduk', compact ('JenisProduk'));
    }

    public function input(Request $request){
      $input = new JenisProduk;
      $input->nama_jenis_produk = $request->nama;
      $input->save();

      return back()->with('status','Berhasil Disimpan!');
    }

    public function edit($id){
      $JenisProduk = JenisProduk::where('id_jenis_produk',$id)->get();
      return view('menu.JenisProduk.JenisProdukEdit ', compact ('JenisProduk'));
    }

    public function update(Request $request){


      $update = JenisProduk::find($request["id"]);
      $update->nama_jenis_produk = $request->nama;
      $update->save();

      return redirect('/JenisProduk')->with('status','Berhasil Diedit!');


    }

    public function delete($id){

      $cari = Supplier::where('id_jenis',$id)->count();

      if ($cari == 0){
      $delete = JenisProduk::find($id);
      $delete->delete();

      return redirect('/JenisProduk')->with('status','Berhasil Dihapus!');
      }
      return redirect('/JenisProduk')->with('gagal','GAGAL!! Terdapat supplier dengan jenis barang ini, ubah atau hapus supplier terlebih dahulu');
    }

}
