<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $req){              
        if(Auth::user()){
            return redirect('admin/lihatpesanan');
        }
        $input = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if(Auth::attempt($input)){
            return redirect('admin/lihatpesanan');
        }else{
            return back();
        }
    }
}
