<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil;
use App\HasilDetail;
use DB;

class HasilPerhitunganController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


      $Hasil = Hasil::with('get_jenisproduk')->orderBy('created_at','DESC')->get();
      return view('menu.HasilPerhitungan.hasilperhitungan', compact('Hasil'));
    }

    public function table($id){
      $HasilDetail = HasilDetail::where('id_hasil', $id)->with('get_supplier1')->orderBy('total','DESC')->get();
      $JMHD = HasilDetail::where('id_hasil', $id)->count();
      $idhasil = $id;
      return view('menu.HasilPerhitungan.tabledetail ', compact ('HasilDetail','JMHD','idhasil'));
    }


    public function ubah(Request $request){

      $update = DB::table('hasil_detail')->where('id_hasil', $request->idhasil)->update(['status' => 0]);


      for ($i=1; $i <= $request->jmhd; $i++) {
        if ($update = HasilDetail::find($request["id".$i])) {
          // code...
          $update->status = "1";
          $update->save();
        }

      }
      return redirect('/HasilPerhitungan')->with('status','Berhasil Dipilih!');
    }
}
