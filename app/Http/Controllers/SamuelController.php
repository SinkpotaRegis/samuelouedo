<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamuelController extends Controller
{
    public function index(){
        return view('SamuelUser.index');
    }
}
