<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($username) {
        return view('hello', ['user' => $username]);
        // echo "Hello ".$username." from Users Controller";
    }

    public function check(Request $req) {
        $req->validate([
            'login' => 'required | max:10',
            'password' => 'required | min:5'
        ]);
        return $req->input();
    }
}
