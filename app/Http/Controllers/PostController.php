<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $posts = Galeri::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        // $this->validate($request, [
        //     'url_foto'     => 'required|url_foto|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'nama'     => 'required|min:5',
        //     'jenis'   => 'required|min:10'
        // ]);

        //upload url_foto

        $galeri = new Galeri();
        $jenis = $request->jenis;
        $url_foto = $request->file('url_foto');
        $url_foto->storeAs('public/', $url_foto->hashName());
        $galeri->user_id = $user_id = Auth::user()->id;
  
        
        //create post
        Galeri::create([
            'url_foto'     => $url_foto->hashName(),
            'nama'     => $request->nama,
            'jenis'   => $jenis = $jenis,
            'user_id' => $user_id = Auth::user()->id,
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit(Galeri $post)
    {
        return view('posts.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Galeri $post)
    {
        //validate form
        $this->validate($request, [
            'url_foto'     => 'url_foto|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama'     => 'required|min:5',
        ]);

        //check if url_foto is uploaded
        if ($request->hasFile('url_foto')) {

            //upload new url_foto
            
            $url_foto = $request->file('url_foto');
            $url_foto->move(public_path('storage/galeri'), $url_foto); 

            //delete old url_foto
            Storage::delete('storage/galeri'.$post->url_foto);

            //update post with new url_foto
            $jenis = 'Bebas';
            $post->update([
                'url_foto'     => $url_foto,
                'nama'     => $request->nama,
                'jenis'   => $request = $jenis,
            ]);
            
        } else {
            
            //update post without url_foto
            $jenis = 'Bebas';
            $post->update([
                'nama'     => $request->nama,
                'jenis'   => $jenis = $jenis,
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
  /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id_foto)
    {
        //delete url_foto
        $post = Galeri::findOrFail($id_foto);
        Storage::delete('public/travelxism/'. $post->url_foto);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}