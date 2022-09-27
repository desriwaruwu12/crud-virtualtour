<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    
    
    
    //
    public function create (){
               
        return view('galeri/create');
    }


    public function store(Request $request){
        
        
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/storage', $image->hashName());

        Galeri::create([
            'url_foto	'     => $image->hashName(),
            'nama'     => "nama",
            'jenis'   => "jenis"
        ]);
    }
    
}
