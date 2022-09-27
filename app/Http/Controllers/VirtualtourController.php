<?php

namespace App\Http\Controllers;

use App\Models\Virtualtour;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

class VirtualtourController extends Controller
{

    public function index()
    {
        $virtual = Virtualtour::latest()->paginate(5);
        return view('virtual.index', compact('virtual'));
    }

    public function create()
    {
        $virtual = Virtualtour::all();
        return view('virtual.create', compact('virtual'));
    }

    public function store(Request $request)
    {

        $virtual = new Virtualtour();
        $virtual->nama_paket = $request->nama_paket;
        $virtual->harga = $request->harga;
        $virtual->deskripsi = $request->deskripsi;
        $virtual->save();

        if ($request->hasFile('url_gambar')) {
            $files = [];
            foreach ($request->file('url_gambar') as $file) {
                if ($file->isValid()) {
                    $url_gambar = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('storage/virtual'), $url_gambar);
                    $files[] = [
                        'url_gambar' => $url_gambar,
                        'nama_paket' => $request->nama_paket,
                        'harga' => $request->harga,
                        'deskripsi' => $request->deskripsi,
                    ];
                }
            }
//            dd($request->all());
            Virtualtour::insert($files);
            echo 'Success';
        }else{
            echo 'Failed';
        }

        //redirect to index
        return redirect()->route('virtual.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Virtualtour $virtual)
    {
        return view('virtual.edit', compact('virtual'));
    }

    public function update(Request $request, Virtualtour $virtual)
    {
//        $this->validate($request, [
//            'nama_paket' => 'required',
//            'harga' => 'required',
//            'deskripsi' => 'required',
//            'url_gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
//        ]);

        if ($request->hasFile('url_gambar')) {

            //upload new image
            $url_gambar = $request->file('url_gambar');
            $url_gambar->storeAs('public/virtual/', $url_gambar->hashName());

            //delete old image
            Storage::delete('public/virtual/'.$virtual->url_gambar);

            //update vtour with new image
            $virtual->update([
                'url_gambar' => $url_gambar->hashName(),
                'nama_paket' => $request->nama_paket,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi
            ]);

        } else {

            $virtual->update([
                'nama_paket'     => $request->nama_paket,
                'harga'     => $request->harga,
                'deskripsi'   => $request->deskripsi,
            ]);
        }
        return redirect()->route('virtual.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Virtualtour $virtual){

        Storage::delete('public/virtual/'. $virtual->url_gambar);
        $virtual->delete();

        return redirect()->route('virtual.index')->with(['success' => 'Data Berhasil Dihapus!']);;
    }
}
