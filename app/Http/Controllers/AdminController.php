<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

      $Admin = User::All();
      //$Supplier = Supplier::with('get_supplier')->get();
      return view('menu.Admin.Admin', compact ('Admin'));
      //return view('menu.Admin.Admin');

    }

    public function input(Request $request){
      $input = new User;
      $input->name = $request->name;
      $input->email = $request->email;
      $input->password = Hash::make($request->password);
      $input->save();

      return back()->with('status','Berhasil Disimpan!');
    }


    public function edit($id){

      $Admin = User::where('id',$id)->get();
      return view('menu.Admin.AdminEdit ', compact ('Admin'));
    }


    public function update(Request $request){
        if ($request["password"] == $request["password1"]){
      //if (!(Hash::check($request->get('password'), Auth::user()->get('password')))){
        $update = User::find($request["id"]);
        $update->name = $request->nama;
        $update->email = $request->email;

        $pw = $request["password"];
        //$hashed = Hash::make($request["password"]);
        $hashed = $update->password;
          if(Hash::check($pw, $hashed)){
            //if( $hashed == $pw){
            //$update->password = Hash::make($request->password);
              $update->save();

              return redirect('/Admin')->with('status','Edit data Berhasil!');
          }else{
            $update->password = Hash::make($request->password);
            //$update->password = $request->password;
            $update->save();
            echo $hashed;
            return redirect('/Admin')->with('status','Edit data dan password berhasil!');
          }

        //$update->save();

        //return redirect('/Admin')->with('status','Berhasil Diedit!');
      }

      return back()->with('gagal','Kata sandi tidak sama atau salah!');


    }
}
