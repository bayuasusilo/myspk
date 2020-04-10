<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Kriteria;
use App\Bobot;
use DB;

class BobotController extends Controller
{
  //
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $jmlb = Bobot::All()->count();
    $Nilai = Nilai::orderBy('nilai', "DESC")->get();
    $Kriteria = Kriteria::All();
    // $id1='1';
    // $id2='2';
    // $id3='3';
    // $id4='4';
    // $id5='5';
    // $K1 = Kriteria::where('id_kriteria',$id1)->get();
    // $K2 = Kriteria::where('id_kriteria',$id2)->get();
    // $K3 = Kriteria::where('id_kriteria',$id3)->get();
    // $K4 = Kriteria::where('id_kriteria',$id4)->get();
    // $K5 = Kriteria::where('id_kriteria',$id5)->get();


    //$Supplier = Supplier::with('get_supplier')->get();
    return view('menu.Bobot.bobot', compact ('Nilai','Kriteria','jmlb'));
    //return view('menu.Bobot.bobot');

  }

  public function input(Request $request){

    DB::table('bobot')->truncate();


    $jum = $request->jumlah;
    for ($i=1; $i <= $jum; $i++) {
      for ($j=1; $j <= $jum; $j++) {
        if ($j > $i) {
          $id=$i.$j;
          // echo $id;
          // echo " ";
          // echo $request->$id;;
          // echo "-";
          $input = new Bobot;
          $input->id_bobot = $id;
          $input->nilai = $request->$id;
          $input->save();
        }else {
          $id=$i.$j;
          $bl=$j.$i;

          $input = new Bobot;
          $input->id_bobot = $id;
          $input->nilai = $request->$id/$request->$bl;
          $input->save();
        }

      }
    }


    // //nilai bobot
    // $jml=$request->jumlah;
    // $K1=11;
    //
    // for($i = 1; $i <= $jml; $i++){
    //   $jumlah=0;
    //
    //   for($j = 1; $j <= $jml; $j++){
    //     $K= $j.$i;
    //     $C1= 'K1' .$K1;
    //     $C2= 'K2' .$K1;
    //    if($update = Bobot::find($K)){
    //    $update->kriteria1 = $request->$C1;
    //
    //    if($j>$i){
    //      $N2= $i.$j;
    //      $jumlah = $jumlah + 1/$request->$N2;
    //      $update->nilai = 1/$request->$N2;
    //    }else{
    //      $N2= $j.$i;
    //      $jumlah = $jumlah + $request->$N2;
    //      $update->nilai = $request->$N2;
    //    }
    //    //$update->nilai = $request->$K1;
    //    //$update->hasil = ($request->n.$K1) / (($request->n.$K1)+1+(1/$request->n.$K1)+(1/$request->n.$K1)+(1/$request->n.$K1));
    //    $update->kriteria2 = $request->$C2;
    //    $update->save();
    //  }else {
    //    $input = new Bobot;
    //    $input->id_bobot = $K1;
    //    $input->kriteria1 = $request->$C1;
    //
    //    if($j>$i){
    //      $N2= $i.$j;
    //      $jumlah = $jumlah + 1/$request->$N2;
    //      $input->nilai = 1/$request->$N2;
    //    }else{
    //      $N2= $j.$i;
    //      $jumlah = $jumlah + $request->$N2;
    //      $input->nilai = $request->$N2;
    //    }
    //    //$input->nilai = $request->$K1;
    //    //$update->hasil = ($request->n.$K1) / (($request->n.$K1)+1+(1/$request->n.$K1)+(1/$request->n.$K1)+(1/$request->n.$K1));
    //    $input->kriteria2 = $request->$C2;
    //    $input->save();
    //  }
    //  $K1=$K1+1;
    //   }
    //
    //     $update = Kriteria::find($i);
    //     $update->jumlah_kriteria = $jumlah;
    //     //$update->bobot_kriteria = $bobot1/5;
    //     $update->save();
    //
    //
    //
    // $K1=$K1+$jml;
    // }

///////////////////////////////////////////
    // if($update = Bobot::find("B11")){
    // $update->hasil = 1 / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
    // $update->save();
    // }else {
    // $input = new Bobot;
    // $input->id_bobot = 'B11';
    // $input->kriteria1 = '1';
    // $input->nilai = 1;
    // $input->hasil = 1 / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
    // $input->kriteria2 = '1';
    // $input->save();
    // }
    //
    // if($update = Bobot::find("B22")){
    // $update->hasil = 1 / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
    // $update->save();
    // }else {
    // $input = new Bobot;
    // $input->id_bobot = 'B22';
    // $input->kriteria1 = '2';
    // $input->nilai = 1;
    // $input->hasil = 1 / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
    // $input->kriteria2 = '2';
    // $input->save();
    // }
    //
    // if($update = Bobot::find("B33")){
    // $update->hasil = 1 / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
    // $update->save();
    // }else {
    // $input = new Bobot;
    // $input->id_bobot = 'B33';
    // $input->kriteria1 = '3';
    // $input->nilai = 1;
    // $input->hasil = 1 / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
    // $input->kriteria2 = '3';
    // $input->save();
    // }
    //
    // if($update = Bobot::find("B44")){
    // $update->hasil = 1 / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
    // $update->save();
    // }else {
    // $input = new Bobot;
    // $input->id_bobot = 'B44';
    // $input->kriteria1 = '4';
    // $input->nilai = 1;
    // $input->hasil = 1 / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
    // $input->kriteria2 = '4';
    // $input->save();
    // }
    //
    // if($update = Bobot::find("B55")){
    // $update->hasil = 1 / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
    // $update->save();
    // }else {
    // $input = new Bobot;
    // $input->id_bobot = 'B55';
    // $input->kriteria1 = '5';
    // $input->nilai = 1;
    // $input->hasil = 1 / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
    // $input->kriteria2 = '5';
    // $input->save();
    // }
//////////////////////////////////////////////////////////

    // $update = Bobot::find("B11");
    // $update->hasil = 1 / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
    // $update->save();
    //
    // $update = Bobot::find("B22");
    // $update->hasil = 1 / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
    // $update->save();
    //
    // $update = Bobot::find("B33");
    // $update->hasil = 1 / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
    // $update->save();
    //
    // $update = Bobot::find("B44");
    // $update->hasil = 1 / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
    // $update->save();
    //
    // $update = Bobot::find("B55");
    // $update->hasil = 1 / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
    // $update->save();

////////////////////////////////////////
  //   if($update = Bobot::find($request["B12"])){
  //   //$update = Bobot::find($request["B12"]);
  //   $update->kriteria1 = $request->K11;
  //   $update->nilai = $request->N12;
  //   $update->hasil = ($request->N12) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $update->kriteria2 = $request->K12;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B12;
  //   $input->kriteria1 = $request->K11;
  //   $input->nilai = $request->N12;
  //   $input->hasil = ($request->N12) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $input->kriteria2 = $request->K12;
  //   $input->save();
  // }
  //
  //   if($update = Bobot::find($request["B13"])){
  //   $update->kriteria1 = $request->K21;
  //   $update->nilai = $request->N13;
  //   $update->hasil = ($request->N13) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $update->kriteria2 = $request->K23;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B13;
  //   $input->kriteria1 = $request->K21;
  //   $input->nilai = $request->N13;
  //   $input->hasil = ($request->N13) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $input->kriteria2 = $request->K23;
  //   $input->save();
  // }
  //
  //   if($update = Bobot::find($request["B14"])){
  //   $update->kriteria1 = $request->K31;
  //   $update->nilai = $request->N14;
  //   $update->hasil = ($request->N14) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $update->kriteria2 = $request->K34;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B14;
  //   $input->kriteria1 = $request->K31;
  //   $input->nilai = $request->N14;
  //   $input->hasil = ($request->N14) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $input->kriteria2 = $request->K34;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B15"])){
  //   $update->kriteria1 = $request->K41;
  //   $update->nilai = $request->N15;
  //   $update->hasil = ($request->N15) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $update->kriteria2 = $request->K45;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B15;
  //   $input->kriteria1 = $request->K41;
  //   $input->nilai = $request->N15;
  //   $input->hasil = ($request->N15) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $input->kriteria2 = $request->K45;
  //   $input->save();
  // }
  //
  //   if($update = Bobot::find($request["B21"])){
  //   $update->kriteria1 = $request->K12;
  //   $update->nilai = 1/$request->N12;
  //   $update->hasil = (1/$request->N12) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $update->kriteria2 = $request->K11;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B21;
  //   $input->kriteria1 = $request->K12;
  //   $input->nilai = 1/$request->N12;
  //   $input->hasil = (1/$request->N12) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $input->kriteria2 = $request->K11;
  //   $input->save();
  // }
  //
  //   if($update = Bobot::find($request["B23"])){
  //   $update->kriteria1 = $request->K52;
  //   $update->nilai = $request->N23;
  //   $update->hasil = ($request->N23) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $update->kriteria2 = $request->K53;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B23;
  //   $input->kriteria1 = $request->K52;
  //   $input->nilai = $request->N23;
  //   $input->hasil = ($request->N23) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $input->kriteria2 = $request->K53;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B24"])){
  //   $update->kriteria1 = $request->K62;
  //   $update->nilai = $request->N24;
  //   $update->hasil = ($request->N24) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $update->kriteria2 = $request->K64;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B24;
  //   $input->kriteria1 = $request->K62;
  //   $input->nilai = $request->N24;
  //   $input->hasil = ($request->N24) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $input->kriteria2 = $request->K64;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B25"])){
  //   $update->kriteria1 = $request->K72;
  //   $update->nilai = $request->N25;
  //   $update->hasil = ($request->N25) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $update->kriteria2 = $request->K75;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B25;
  //   $input->kriteria1 = $request->K72;
  //   $input->nilai = $request->N25;
  //   $input->hasil = ($request->N25) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $input->kriteria2 = $request->K75;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B31"])){
  //   $update->kriteria1 = $request->K23;
  //   $update->nilai = 1/$request->N13;
  //   $update->hasil = (1/$request->N13) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $update->kriteria2 = $request->K21;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B31;
  //   $input->kriteria1 = $request->K23;
  //   $input->nilai = 1/$request->N13;
  //   $input->hasil = (1/$request->N13) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $input->kriteria2 = $request->K21;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B32"])){
  //   $update->kriteria1 = $request->K53;
  //   $update->nilai = 1/$request->N23;
  //   $update->hasil = (1/$request->N23) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $update->kriteria2 = $request->K52;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B32;
  //   $input->kriteria1 = $request->K53;
  //   $input->nilai = 1/$request->N23;
  //   $input->hasil = (1/$request->N23) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $input->kriteria2 = $request->K52;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B34"])){
  //   $update->kriteria1 = $request->K83;
  //   $update->nilai = $request->N34;
  //   $update->hasil = ($request->N34) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $update->kriteria2 = $request->K84;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B34;
  //   $input->kriteria1 = $request->K83;
  //   $input->nilai = $request->N34;
  //   $input->hasil = ($request->N34) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $input->kriteria2 = $request->K84;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B35"])){
  //   $update->kriteria1 = $request->K93;
  //   $update->nilai = $request->N35;
  //   $update->hasil = ($request->N35) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $update->kriteria2 = $request->K95;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B35;
  //   $input->kriteria1 = $request->K83;
  //   $input->nilai = $request->N35;
  //   $input->hasil = ($request->N35) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $input->kriteria2 = $request->K95;
  //   $input->save();
  // }
  //
  //
  //
  //   if($update = Bobot::find($request["B41"])){
  //   $update->kriteria1 = $request->K34;
  //   $update->nilai = 1/$request->N14;
  //   $update->hasil = (1/$request->N14) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $update->kriteria2 = $request->K31;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B41;
  //   $input->kriteria1 = $request->K34;
  //   $input->nilai = 1/$request->N14;
  //   $input->hasil = (1/$request->N14) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $input->kriteria2 = $request->K31;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B42"])){
  //   $update->kriteria1 = $request->K64;
  //   $update->nilai = 1/$request->N24;
  //   $update->hasil = (1/$request->N24) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $update->kriteria2 = $request->K62;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B42;
  //   $input->kriteria1 = $request->K64;
  //   $input->nilai = 1/$request->N24;
  //   $input->hasil = (1/$request->N24) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $input->kriteria2 = $request->K62;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B43"])){
  //   $update->kriteria1 = $request->K84;
  //   $update->nilai = 1/$request->N34;
  //   $update->hasil = (1/$request->N34) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $update->kriteria2 = $request->K83;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B43;
  //   $input->kriteria1 = $request->K84;
  //   $input->nilai = 1/$request->N34;
  //   $input->hasil = (1/$request->N34) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $input->kriteria2 = $request->K83;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B45"])){
  //   $update->kriteria1 = $request->K104;
  //   $update->nilai = $request->N45;
  //   $update->hasil = ($request->N45) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $update->kriteria2 = $request->K105;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B45;
  //   $input->kriteria1 = $request->K104;
  //   $input->nilai = $request->N45;
  //   $input->hasil = ($request->N45) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //   $input->kriteria2 = $request->K105;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B51"])){
  //   $update->kriteria1 = $request->K45;
  //   $update->nilai = 1/$request->N15;
  //   $update->hasil = (1/$request->N15) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $update->kriteria2 = $request->K41;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B51;
  //   $input->kriteria1 = $request->K45;
  //   $input->nilai = 1/$request->N15;
  //   $input->hasil = (1/$request->N15) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15));
  //   $input->kriteria2 = $request->K41;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B52"])){
  //   $update->kriteria1 = $request->K75;
  //   $update->nilai = 1/$request->N25;
  //   $update->hasil = (1/$request->N25) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $update->kriteria2 = $request->K72;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B52;
  //   $input->kriteria1 = $request->K75;
  //   $input->nilai = 1/$request->N25;
  //   $input->hasil = (1/$request->N25) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25));
  //   $input->kriteria2 = $request->K72;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B53"])){
  //   $update->kriteria1 = $request->K95;
  //   $update->nilai = 1/$request->N35;
  //   $update->hasil = (1/$request->N35) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $update->kriteria2 = $request->K93;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B53;
  //   $input->kriteria1 = $request->K95;
  //   $input->nilai = 1/$request->N35;
  //   $input->hasil = (1/$request->N35) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35));
  //   $input->kriteria2 = $request->K93;
  //   $input->save();
  // }
  //
  //
  //   if($update = Bobot::find($request["B54"])){
  //   $update->kriteria1 = $request->K105;
  //   $update->nilai = 1/$request->N45;
  //   $update->hasil = (1/$request->N45) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $update->kriteria2 = $request->K104;
  //   $update->save();
  // }else {
  //   $input = new Bobot;
  //   $input->id_bobot = $request->B54;
  //   $input->kriteria1 = $request->K105;
  //   $input->nilai = 1/$request->N45;
  //   $input->hasil = (1/$request->N45) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45));
  //   $input->kriteria2 = $request->K104;
  //   $input->save();
  // }
  //
  //
  //   $bobot1 = 1 / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15)) +
  //             ($request->N12) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25)) +
  //             ($request->N13) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35)) +
  //             ($request->N14) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45)) +
  //             ($request->N15) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //
  //   $bobot2 = (1/$request->N12) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15)) +
  //             1 / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25)) +
  //             ($request->N23) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35)) +
  //             ($request->N24) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45)) +
  //             ($request->N25) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //
  //   $bobot3 = (1/$request->N13) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15)) +
  //             (1/$request->N23) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25)) +
  //             1 / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35)) +
  //             ($request->N34) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45)) +
  //             ($request->N35) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //
  //   $bobot4 = (1/$request->N14) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15)) +
  //             (1/$request->N24) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25)) +
  //             (1/$request->N34) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35)) +
  //             1 / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45)) +
  //             ($request->N45) / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //
  //   $bobot5 = (1/$request->N15) / (1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15)) +
  //             (1/$request->N25) / (($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25)) +
  //             (1/$request->N35) / (($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35)) +
  //             (1/$request->N45) / (($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45)) +
  //             1 / (($request->N15)+($request->N25)+($request->N35)+($request->N45)+1);
  //
  //
  //   //Update jumlah kriteria 1
  //   $update = Kriteria::find($request->K11);
  //   $update->jumlah_kriteria = 1+(1/$request->N12)+(1/$request->N13)+(1/$request->N14)+(1/$request->N15);
  //   $update->bobot_kriteria = $bobot1/5;
  //   $update->save();
  //
  //   //Update jumlah kriteria 2
  //   $update = Kriteria::find($request->K52);
  //   $update->jumlah_kriteria = ($request->N12)+1+(1/$request->N23)+(1/$request->N24)+(1/$request->N25);
  //   $update->bobot_kriteria = $bobot2/5;
  //   $update->save();
  //
  //   //Update jumlah kriteria 3
  //   $update = Kriteria::find($request->K83);
  //   $update->jumlah_kriteria = ($request->N13)+($request->N23)+1+(1/$request->N34)+(1/$request->N35);
  //   $update->bobot_kriteria = $bobot3/5;
  //   $update->save();
  //
  //   //Update jumlah kriteria 4
  //   $update = Kriteria::find($request->K104);
  //   $update->jumlah_kriteria = ($request->N14)+($request->N24)+($request->N34)+1+(1/$request->N45);
  //   $update->bobot_kriteria = $bobot4/5;
  //   $update->save();
  //
  //   //Update jumlah kriteria 5
  //   $update = Kriteria::find($request->K105);
  //   $update->jumlah_kriteria = ($request->N15)+($request->N25)+($request->N35)+($request->N45)+1;
  //   $update->bobot_kriteria = $bobot5/5;
  //   $update->save();
  //
    // $id1='1';
    // $id2='2';
    // $id3='3';
    // $id4='4';
    // $id5='5';
    $Kriteria = Kriteria::All();
    // $B1 = Bobot::where('kriteria1',$id1)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B2 = Bobot::where('kriteria1',$id2)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B3 = Bobot::where('kriteria1',$id3)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B4 = Bobot::where('kriteria1',$id4)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B5 = Bobot::where('kriteria1',$id5)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    //
    // $K1 = Kriteria::where('id_kriteria',$id1)->get();
    // $K2 = Kriteria::where('id_kriteria',$id2)->get();
    // $K3 = Kriteria::where('id_kriteria',$id3)->get();
    // $K4 = Kriteria::where('id_kriteria',$id4)->get();
    // $K5 = Kriteria::where('id_kriteria',$id5)->get();


  $tes1 = DB::table('bobot')
        ->select('nilai')
        ->orderBy('id_bobot','ASC')
        ->get();



  $tes = array (1,2,3,4,5,6,7,8,9,10,11,12);

  $tes = array_chunk($tes, 5);

  $jk = Kriteria::All()->count();
  $new=[];
  $ci=0;
  $i=0;
  $j=0;

        foreach ($tes1 as $key => $value) {
          $new[$i][$j]= $value->nilai;
          if ($j < $jk-1 ) {

              $j=$j+1;
          }else {
            $j=0;
            $i=$i+1;
          }
        }

  //////////////////// tes1
  $new1=[];
  $new12=[];
  $k=0;
  $ci=0;
  $i=0;
  $j=0;

        foreach ($tes1 as $key => $value) {
          $new1[$j][$i]= $value->nilai;
          $new12[$k]= $value->nilai;
          $k=$k+1;
          if ($j < $jk-1 ) {

              $j=$j+1;
          }else {
            $j=0;
            $i=$i+1;
          }
        }
//print_r($new1);

//echo "----------------------------------";
//print_r($new);

$perkalianmatrix=[];
$kali=0;
$jumlah=0;

  for ($b=0; $b < $jk; $b++) {
    // code...
    for ($c=0; $c < $jk; $c++) {
      // code...
      for ($d=0; $d < $jk; $d++) {
        // code...
        $kali=$new[$b][$d]*$new[$d][$c];
        $jumlah=$jumlah+$kali;
        // echo $new[$b][$d];
        // echo '*';
        // echo $new[$d][$c];
        // echo '=';
        // echo $kali;
        // echo '  ';
        $perkalianmatrix[$b][$c]=$jumlah;
        $kali=0;
      }
      $jumlah=0;
    }
  }

// echo "----------------------------------";
// print_r($perkalianmatrix);

$jumlahbaris=[];
$totaljumlah=0;
//$tambahjumlahbaris=0;
for ($a=0; $a < $jk; $a++) {
  // code...
  $tambahjumlahbaris=0;
  for ($b=0; $b < $jk; $b++) {
    // code...
    $tambah=$perkalianmatrix[$a][$b];
    $tambahjumlahbaris=$tambahjumlahbaris+$tambah;
  }
$jumlahbaris[$a]=$tambahjumlahbaris;
$totaljumlah=$totaljumlah+$tambahjumlahbaris;
}

// print_r($jumlahbaris);
// echo $totaljumlah;


$bobot=[];
for ($a=0; $a < $jk; $a++) {
  // code...
  $bobot[$a]=$jumlahbaris[$a]/$totaljumlah;
}
// print_r($bobot);

foreach ($Kriteria as $key => $value) {
  // code...
  $update = Kriteria::find($value->id_kriteria);
  $update->bobot_kriteria = $bobot[$key];
  $update->save();
}



    return view('menu.Bobot.bobottable', compact ('Kriteria','new','tes1','new1','bobot','perkalianmatrix','jumlahbaris','totaljumlah'));
  }

  public function breadcrumb(){

    // $id1='1';
    // $id2='2';
    // $id3='3';
    // $id4='4';
    // $id5='5';
    $Kriteria = Kriteria::All();
    // $B1 = Bobot::where('kriteria1',$id1)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B2 = Bobot::where('kriteria1',$id2)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B3 = Bobot::where('kriteria1',$id3)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B4 = Bobot::where('kriteria1',$id4)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    // $B5 = Bobot::where('kriteria1',$id5)->orderBy('kriteria1','ASC')->orderBy('kriteria2','ASC')->get();
    //
    // $K1 = Kriteria::where('id_kriteria',$id1)->get();
    // $K2 = Kriteria::where('id_kriteria',$id2)->get();
    // $K3 = Kriteria::where('id_kriteria',$id3)->get();
    // $K4 = Kriteria::where('id_kriteria',$id4)->get();
    // $K5 = Kriteria::where('id_kriteria',$id5)->get();

    $tes1 = DB::table('bobot')
          ->select('nilai')
          ->orderBy('id_bobot','ASC')
          ->get();



    $tes = array (1,2,3,4,5,6,7,8,9,10,11,12);

    $tes = array_chunk($tes, 5);

    $jk = Kriteria::All()->count();
    $new=[];
    $ci=0;
    $i=0;
    $j=0;
      //for ($i=0; $i < 5; $i++) {
        // code...
        //for ($j=0; $j < 5; $j++) {
          foreach ($tes1 as $key => $value) {
            $new[$i][$j]= $value->nilai;
            if ($j < $jk-1 ) {

                $j=$j+1;
            }else {
              $j=0;
              $i=$i+1;
            }
          }
        //}
      //}

    //$array = get_object_vars($tes);
    //echo $jk;

    //////////////////// tes1
    $new1=[];
    $new12=[];
    $k=0;
    $ci=0;
    $i=0;
    $j=0;

          foreach ($tes1 as $key => $value) {
            $new1[$j][$i]= $value->nilai;
            $new12[$k]= $value->nilai;
            $k=$k+1;
            if ($j < $jk-1 ) {

                $j=$j+1;
            }else {
              $j=0;
              $i=$i+1;
            }
          }
  //print_r($new1);

  //echo "----------------------------------";
  //print_r($new);

  $perkalianmatrix=[];
  $kali=0;
  $jumlah=0;

    for ($b=0; $b < $jk; $b++) {
      // code...
      for ($c=0; $c < $jk; $c++) {
        // code...
        for ($d=0; $d < $jk; $d++) {
          // code...
          $kali=$new[$b][$d]*$new[$d][$c];
          $jumlah=$jumlah+$kali;
          // echo $new[$b][$d];
          // echo '*';
          // echo $new[$d][$c];
          // echo '=';
          // echo $kali;
          // echo '  ';
          $perkalianmatrix[$b][$c]=$jumlah;
          $kali=0;
        }
        $jumlah=0;
      }
    }

  // echo "----------------------------------";
  // print_r($perkalianmatrix);

  $jumlahbaris=[];
  $totaljumlah=0;
  //$tambahjumlahbaris=0;
  for ($a=0; $a < $jk; $a++) {
    // code...
    $tambahjumlahbaris=0;
    for ($b=0; $b < $jk; $b++) {
      // code...
      $tambah=$perkalianmatrix[$a][$b];
      $tambahjumlahbaris=$tambahjumlahbaris+$tambah;
    }
  $jumlahbaris[$a]=$tambahjumlahbaris;
  $totaljumlah=$totaljumlah+$tambahjumlahbaris;
  }

  // print_r($jumlahbaris);
  // echo $totaljumlah;


  $bobot=[];
  for ($a=0; $a < $jk; $a++) {
    // code...
    $bobot[$a]=$jumlahbaris[$a]/$totaljumlah;
  }
  // print_r($bobot);


    return view('menu.Bobot.bobottable', compact ('Kriteria','new','new1','bobot','perkalianmatrix','jumlahbaris','totaljumlah'));

  }


}
