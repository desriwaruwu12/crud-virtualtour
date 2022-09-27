<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class WorkController extends Controller
{

    public function index()
    {
        $work = Work::select('works.*', 'users.name')
            ->join('users', 'users.id', '=', 'works.user_id')->get();

        return view('work/index', compact('work'));
    }

    public function create()
    {
        return view('work.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'url_foto'      => 'required',
            'url_foto.*'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi'     => 'required|min:5',
            'jenis'         => 'required|min:5',

        ]);

        $work = new Work();
        $work->deskripsi    = $request->deskripsi;
        $work->jenis        = $request->jenis;
        $work->user_id      = $user_id = Auth::user()->id;
        $work->save();

        if ($request->hasfile('url_foto')) { 
            $files = [];
            foreach ($request->file('url_foto') as $file) {
                if ($file->isValid()) {
                    $url_foto = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('storage'), $url_foto);                
                    $files[] = [
                        'url_foto' => $url_foto,
                        'nama'     => ('dsa'),
                        'jenis'     =>$request->jenis,
                        'id_work'   => $work->id_work,
                        'user_id' => $user_id = Auth::user()->id
                    ];
                }
            }
            Galeri::insert($files);            
            echo'Success';
        }else{
            echo'Gagal';
        }

        return redirect()->route('work.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id_work)
    {
        $work = Work::findOrfail($id_work);
        return view('work.edit', compact('work'));
    }

    public function update (Request $request, Work $work)
    {   
        $work = Work::select('works.*')
        ->where('id_work','=',$request->id_work)->get();

        $galeri = Galeri::select('galeri.*')
        ->where('id_work','=',$request->id_work)->get();

        $galeri->each->delete();
        foreach ($galeri as $galeri) {
            File::delete('storage/'.$galeri->url_foto);
            }
        
        $work->each->delete();

        $this->validate($request, [
            'url_foto'      => 'required',
            'url_foto.*'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi'     => 'required|min:5',
            'jenis'         => 'required|min:5',

        ]);

        $work = new Work();
        $work->id_work = $request->id_work;
        $work->deskripsi    = $request->deskripsi;
        $work->jenis        = $request->jenis;
        $work->user_id      = $user_id = Auth::user()->id;
        $work->save();

        if ($request->hasfile('url_foto')) { 
            $files = [];
            foreach ($request->file('url_foto') as $file) {
                if ($file->isValid()) {
                    $url_foto = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('storage'), $url_foto);                
                    $files[] = [
                        'url_foto' => $url_foto,
                        'nama'     => ('Work'),
                        'jenis'     =>$request->jenis,
                        'id_work'   => $work->id_work,
                        'user_id' => $user_id = Auth::user()->id
                    ];
                }
            }
            Galeri::insert($files);            
            echo'Success';
        }else{
            echo'Gagal';
        }

        return redirect()->route('work.index')->with(['success' => 'Data Berhasil Disimpan!']);
        
    }
    public function destroy($id_work)
    {
        $work = Work::findOrfail($id_work);
        $galeri = Galeri::select('galeri.*')
            ->where('id_work','=',$id_work)->get();
        $galeri->each->delete();
        $work->delete();
        //redirect to index
        return redirect()->route('work.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}