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
        return $req->input();
    }
}
