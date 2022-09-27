<?php

namespace App\Http\Controllers;

use App\Models\Offline;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\OfftourRequest;

class OfflineController extends Controller
{
    public function index(){
        $offline = Offline::latest()->paginate(3);
        return view('offline.index', compact('offline'));
    }

    public function create(){
        return view('offline.create');
    }

    public function store(OfftourRequest $request){
    
        //upload url_foto
        $image = $request->file('url_gambar');
        $image->storeAs('public/offline', $image->hashName());

        Offline::create([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jenis_paket' => $request->jenis_paket,
            'jumlah_minimum' => $request->jumlah_minimum,
            'url_gambar' => $image->hashName(),
        ]);

        return redirect()->route('offline.index');
    }

    public function edit($tour_offline_id){
        $offline = Offline::findOrFail($tour_offline_id);
        return view('offline.edit', compact('offline'));
    }

    public function update(Request $request, $tour_offline_id)
    {
    $offline = Offline::findOrFail($tour_offline_id);
    
    //check if gambar is uploaded
    if ($request->hasFile('url_gambar')) {

        
        //upload new gambar
        $image = $request->file('url_gambar');
        $image->storeAs('public/offline', $image->hashName());
        
        //delete old gambar
        Storage::delete('public/offline/'.$offline->image);

        //update post with new gambar
        $offline->update([  
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jenis_paket' => $request->jenis_paket,
            'jumlah_minimum' => $request->jumlah_minimum,
            'url_gambar' => $image->hashName(),
        ]);

    } else {
        
        //update post without gambar
        $offline->update([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jenis_paket' => $request->jenis_paket,
            'jumlah_minimum' => $request->jumlah_minimum,
        ]);
    }


    //redirect to index
    return redirect()->route('offline.index')->with(['success' => 'Data Berhasil Diubah!']);
    // dd($offline);
  }

  public function destroy($tour_offline_id){
      $offline = Offline::findorFail($tour_offline_id);

      Storage::delete('public/offline/'. $offline->url_gambar);
      $offline->delete();

      return redirect()->route('offline.index');
  }

}
