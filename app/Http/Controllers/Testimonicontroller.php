<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TestimoniRequest;

class Testimonicontroller extends Controller
{
    //
    public function index()
    {
        //get posts
        $posts = Testimoni::latest()->paginate(5);

        //render view with posts
        return view('testimoni.index', compact('posts'));
    }

public function create()
{
    return view('testimoni.create');
}
public function store(TestimoniRequest $request)
{
    
    //upload url_foto
    $url_foto = $request->file('url_foto');
    $url_foto->storeAs('public/posts', $url_foto->hashName());

    //create post
    Testimoni::create([
        'nama'     => $request->nama,
        'deskripsi'   => $request->deskripsi,
        'jenis'     => $request->jenis,
        'url_foto'     => $url_foto->hashName(),
    ]);

    //redirect to index
    return redirect()->route('testimoni.index')->with(['success' => 'Data Berhasil Disimpan!']);
}

public function edit($id){
    $post = Testimoni::findOrFail($id);
    return view('testimoni.edit', compact('post'));

}
public function update(Request $request, $id)
{
    $post = Testimoni::findOrFail($id);
    
    //check if url_foto is uploaded
    if ($request->hasFile('url_foto')) {

        //upload new url_foto
        $image = $request->file('url_foto');
        $image->storeAs('public/posts', $image->hashName());

        //delete old url_foto
        Storage::delete('public/posts/'.$post->image);

        //update post with new url_foto
        $post->update([  
            'url_foto'     => $image->hashName(),
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'jenis'   => $request->jenis,
        ]);

    } else {

        //update post without url_foto
        $post->update([
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'jenis'   => $request->jenis,
        ]);
    }


    //redirect to index
    return redirect()->route('testimoni.index')->with(['success' => 'Data Berhasil Diubah!']);
}
public function destroy($id)
{
    //delete url_foto
    $post = Testimoni::findOrFail($id);
    Storage::delete('public/posts/'. $post->url_foto);

    //delete post
    $post->delete();

    //redirect to index
    return redirect()->route('testimoni.index')->with(['success' => 'Data Berhasil Dihapus!']);
}
}