<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class HeadlineController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $headline = Headline::latest()->paginate(5);

        //render view with posts
        return view('headline.index', compact('headline'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('headline.create');
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
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/headline', $image->hashName());
        //create post
        Headline::create([
            'url_foto'     => $image->hashName(),
            'urutan'     => $request->urutan,
            'url_get'     => $request->get,
            'judul'     => $request->judul,
            'caption'     => $request->caption,
            
        ]);

        //redirect to index
        return redirect()->route('headline.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */
    public function edit($id)
    {
        $post = Headline::findOrFail($id);
        return view('headline.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, $id)
    {
        //check if image is uploaded
        $post = Headline::findOrFail($id);
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName(); // membuat nama dari request file upload 
            $request->file('image')->move(public_path('storage/headline/'), $filename); // memindahkan file ke folder folder_project/public/storage/headline/nama_file.jpg
            File::delete(public_path('storage/headline/'), $post->url_foto); // menghapus file lama dengan mencari path folder foto tersebut
            
            //update post with new image
            $post->update([
            'url_foto'     => $filename,
            'urutan'     => $request->urutan,
            'url_get'     => $request->get,
            'judul'     => $request->judul,
            'caption'     => $request->caption,
            ]);
            
        } else {
            //update post without image
            $post->update([
            'urutan'     => $request->urutan,
            'url_get'     => $request->get,
            'judul'     => $request->judul,
            'caption'     => $request->caption,
            ]);
        }

        //redirect to index
        return redirect()->route('headline.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
  /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id)
    {
        //delete image
        $post = Headline::findOrFail($id);
        Storage::delete('public/headline/'. $post->url_foto);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('headline.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}