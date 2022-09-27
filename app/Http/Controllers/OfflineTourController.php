<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfflineTourController extends Controller
{
    public function index(){

        return view('offlinetour');
    }
}
