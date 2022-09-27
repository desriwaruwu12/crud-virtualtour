<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.page.user.index', compact('users'));
    }

    public function create(){
        return view('admin.page.user.create');
    }

    public function store(Request $request){
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        
        return redirect()->route('user.index');
    }
    
    public function delete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('user.index');
    }
}
