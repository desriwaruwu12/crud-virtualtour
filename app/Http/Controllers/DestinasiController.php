<?php

namespace App\Http\Controllers;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;

class DestinasiController extends Controller
{
    public function index()
    {
        //get destinasi
       
        $destinasi = Destinasi::latest()->paginate(5);

        //render view with destinasi
        return view('destinasi.index', compact('destinasi'));
    }
    public function create()
    {
        return view('destinasi.create');
    }
    public function store(Request $request)
    {


        $this->validate($request, [
            'url_foto'      => 'required',
            'url_foto.*'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_destinasi'     => 'required',
            'deskripsi'   => 'required',
            'alamat'     => 'required',
            'longitude'   => 'required',
            'latitude'     => 'required',

        ]);


        $destinasi = new Destinasi();
        $destinasi->nama_destinasi    = $request->nama_destinasi;
        $destinasi->deskripsi        = $request->deskripsi;
        $destinasi->alamat        = $request->alamat;
        $destinasi->longitude        = $request->longitude;
        $destinasi->latitude        = $request->latitude;
        $destinasi->save();

        if ($request->hasfile('url_foto')) { 
            $files = [];
            foreach ($request->file('url_foto') as $file) {
                if ($file->isValid()) {
                    $url_foto = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('storage'), $url_foto);                
                    $files[] = [
                        'url_foto' => $url_foto,
                        'nama'     =>$request->nama_destinasi,
                        'jenis'     =>('Gambar Destinasi'),
                        'id_destinasi'   => $destinasi->id,
                        'user_id' => $user_id = Auth::user()->id
                    ];
                }
            }
            Galeri::insert($files);            
            echo'Success';
        }else{
            echo'Gagal';
        }

        return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }


    // CEKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK
    public function edit(Destinasi $destinasi)
    {
        return view('destinasi.edit', compact('destinasi'));
    }

    public function update(Request $request, Destinasi $destinasi)
    {
        //validate form
        $this->validate($request, [
            'nama_destinasi'     => 'required',
            'deskripsi'   => 'required',
            'alamat'     => 'required',
            'longitude'   => 'required',
            'latitude'     => 'required',
        ]);

        //check if image is uploaded
        if ($request->hasFile) {

            $url_foto = $request->file('url_foto');
            $url_foto->storeAs('public/', $url_foto->hashName());
            
            //delete old url_foto
            Storage::delete('public/'.$destinasi->url_foto);
            
            
            $destinasi->update([
            'url_foto' => $url_foto->hashName(),
            'nama_destinasi'     => $request->nama_destinasi,
            'deskripsi'   => $request->deskripsi,
            'alamat'   => $request->alamat,
            'longitude'   => $request->longitude,
            'latitude'   => $request->latitude,
            ]);

        } else {

            
            $destinasi->update([
            'nama_destinasi'     => $request->nama_destinasi,
            'deskripsi'   => $request->deskripsi,
            'alamat'   => $request->alamat,
            'longitude'   => $request->longitude,
            'latitude'   => $request->latitude,
            ]);
        }

        //redirect to index
        return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id_destinasi)
    {
        $destinasi = Destinasi::findOrfail($id_destinasi);
        $galeri = Galeri::select('galeri.*')
            ->where('id_destinasi','=',$id_destinasi)->get();
        $galeri->each->delete();
        $destinasi->delete();
        //redirect to index
        return redirect()->route('destinasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}