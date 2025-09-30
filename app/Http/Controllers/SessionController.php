<?php

namespace App\Http\Controllers;

use app\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('sesi/index');
    }
    public function login (Request $request){
        Session::flash('email',$request->email);


        $request->validate ([
        'email' => 'required',
        'password' => 'required',   
        ]);
        [
            'email'=>'Email Wajib Disi',
            'password'=> 'Password Wajib Disi',
        ];
        
        $infologin = [
           'email' =>$request->email,
           'password' =>$request->password,
        ];
        if (Auth::attempt($infologin)) {
            return redirect('departemen')->with('success','Berhasil Login');
        } else {
            return redirect('sesi')->with('success','Username dan Password Yang Dimaksudkan Tidak Valid');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('sesi')->with('success','Berhasil Logout');
    }
}
