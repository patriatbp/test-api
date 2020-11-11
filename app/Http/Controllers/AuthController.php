<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $data){
        $first_name = $data["first_name"];
        $last_name = $data["last_name"];

        echo "<h1>Selamat Datang $first_name $last_name</h1>";

        echo " <h2>Terima Kasih telah Mendaftar di Sosial Media Kami</h2> ";
    }
}
