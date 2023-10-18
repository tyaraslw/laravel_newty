<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginControll extends Controller
{
    function login(){
        return view('/login');
    }

    function proses_login(Request $request){
        $dataLogin = $request->only("username", "password");
            if(Auth::attempt($dataLogin)){
                return redirect('/home');
            }else{
                return redirect('/login');
            }
    }
}