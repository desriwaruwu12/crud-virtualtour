<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;

class TagController extends Controller
{
    public function index(){

/**
     * index
     *
     * @return void
     */
    $tag = Tag::select('tag.*','users.name')
            ->join('users','users.id','=','tag.id_user')->get();

        return view('tag/index',compact('tag'));
    }

    public function create()
    {

        $user = User::all();
        return view('tag.create',compact('user'));
    }

    
    public function store(Request $request){

        DB::beginTransaction();
        
        $send = $request->send;
        $id = $request->id;
        $tag = new Tag();
        $tag->text_tag = $request->text_tag;
        $tag->id_user = $request->id;

        try {
            
            $tag->save();
            
          return redirect(route('tag.index'))->with('pesan-berhasil','Anda berhasil menambah data produk');
        }catch (\Exception $e){
            return redirect(route('tag.create'))->with('pesan-gagal','Anda gagal menambah data produk');
        }

    }

    public function edit(Tag $tag,User $user)
    {

 //get posts
 $tag = Tag::latest()->paginate(5);

 
 $user = User::all();

        return view('tag.edit', compact('tag','user'));
    
 }

 public function update(Request $request, Tag $tag)
 {
     //validate form
     $this->validate($request, [
        
         'text_tag'     => 'required|min:1',
         
     ]);

   

         //update post without image
         $tag->update([
             'text_tag'     => $request->text_tag,
             'id_user' => $request->id,
             
         ]);
     

     //redirect to index
     return redirect()->route('tag.index')->with(['success' => 'Data Berhasil Diubah!']);
 }

  /**
  * destroy
  *
  * @param  mixed $tag
  * @return void
  */
  public function delete($id_tag){
    //pastikan ada data
    $tag = Tag::findOrFail($id_tag);
    
    
    try {
       $tag->delete();
      return redirect(route('tag.index'))->with('pesan-berhasil','Anda berhasil menghapus data customer');
    }catch (\Exception $e){
     return redirect(route('tag.index'))->with('pesan-gagal','Anda gagal menghapus data customer');
    }
}
}