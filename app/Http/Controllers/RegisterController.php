<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('admin.register');
    }

    public function store(Request $request){
        $Level = 'costumer';
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            // 'no_telpon' => $request->no_telpon,
            // 'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $Level,
        ]);

        return redirect()->route('register');
    }

    public function forgotpassword() {
        return view('admin.forgotpassword');
    }
}
