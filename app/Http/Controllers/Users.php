<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($username) {
        echo "Hello ".$username." from Users Controller";
    }
}
