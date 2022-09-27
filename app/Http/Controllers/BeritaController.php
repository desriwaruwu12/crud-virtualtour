<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Models\Berita;
use App\Models\Tag_berita;
use App\Models\Berita_galeri;
use App\Models\User;
use App\Models\Tag;
use App\Models\Galeri;

use Illuminate\Support\Facades\DB;
use Mpdf\Mpdf;
use File;

class BeritaController extends Controller
{
    //

    public function index(){

        /**
             * index
             *
             * @return void
             */
            $berita = Berita::select('berita.*','users.name')
                    ->join('users','users.id','=','berita.user_id')->get();
        
                return view('berita/index',compact('berita'));
            }


            //bagian tampilan create
            public function create (){
                $users = User::all();
                $tag = Tag::all();
                return view('berita/create',compact('users','tag'));
            }

         
            //bagian menyimpan data
            public function store(Request $request){
                
                $users = User::all();
                $tag = Tag::all();
                $user = Auth::user()->id; 
                

              try {

                    $send = $request->send;
                    $text_tag       = $_POST['text_tag'];
                    $datatext = explode(";" , $text_tag);
                    $total = count($datatext);
                    
               
                    for($i=0; $i<$total; $i++){
                    $tag[$i] = new Tag();
                    $tag[$i]->text_tag = $datatext[$i];
                    $tag[$i]->id_user = $user = Auth::user()->id; 
                    $count=$tag[$i]->select('text_tag')->where('text_tag','=',$datatext[$i])->get();
                    $val=count($count);
                    
                   
                    if($val==0)
                    {
                        $tag[$i]->save();
                    }

                     }

                     $id = $request->id;

                    $id_tag = $request->id_tag;
                    $berita = new Berita();
                    $berita->judul_berita = $request->judul_berita;
                    $berita->caption = $request->caption;
                    $berita->isi_berita = $request->isi_berita;
                    $berita->viewer_count = "0";
                    $berita->user_id = $user = Auth::user()->id; 
                    $berita->save();

                    $this->validate($request, [
                        'url_foto'      => 'required',
                        'url_foto.*'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        
                    ]);
                
                    if ($request->hasfile('url_foto')) { 
                        $files = [];
                        foreach ($request->file('url_foto') as $file) {
                            if ($file->isValid()) {
                                $url_foto = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                                $file->move(public_path('storage'), $url_foto);                    
                                $files[] = [
                                    'url_foto' => $url_foto,
                                    'nama' => $request->judul_berita,
                                    'jenis' => ('Berita'),
                                    'user_id' => $user = Auth::user()->id,
                                    'id_berita'=> $berita->id_berita
                                ];
                            }
                        }
                        Galeri::insert($files);            
                        
                    }
            
                   

                    for($i=0; $i<$total; $i++){

                    $tags = Tag::select('id_tag')->
                    where('text_tag','=',$datatext[$i])->get();
                   
                        $tagss = $tags;
                    
                        
                    $tag_berita = new Tag_berita();
                    $tag_berita->id_berita = $berita->id_berita;
                    $tag_berita->id_tag = $tags[0]->id_tag;
                    $tag_berita->save();
                    }
                    
                    DB::commit();
                 return redirect(route('berita.index'))->with('pesan-berhasil','Anda berhasil menambah data Berita');
               }catch (\Exception $e){
                return redirect(route('berita.create'))->with('pesan-gagal','Anda gagal menambah data Berita');
                }
        
            }
        
            public function edit($id_berita)
            {

         //get posts
         $berita = Berita::findOrFail($id_berita);
         $users = User::all();
         $tag = Tag::all();
       

                return view('berita.edit', compact('berita','users','tag'));
         }
        

         public function update (Request $request,Berita $berita)
         {
           
            $users = User::all();
            $tag = Tag::all();
            $user = Auth::user()->id; 

            $berita = Berita::select('berita.*')
            ->where('id_berita','=',$request->id_berita)->get();

            $tag_berita = Tag_berita::select('berita_tag.*')
            ->where('id_berita','=',$request->id_berita)->get();

            $galeri = Galeri::select('galeri.*')
            ->where('id_berita','=',$request->id_berita)->get();

            $galeri->each->delete();
            foreach ($galeri as $galeri) {
                File::delete('storage/'.$galeri->url_foto);
                }
            $tag_berita->each->delete();
            
            $berita->each->delete();
            
          try {
            


                $send = $request->send;
                $text_tag       = $_POST['text_tag'];
                $datatext = explode(";" , $text_tag);
                $total = count($datatext);
                
           
                for($i=0; $i<$total; $i++){
                $tag[$i] = new Tag();
                $tag[$i]->text_tag = $datatext[$i];
                $tag[$i]->id_user = $user = Auth::user()->id; 
                $count=$tag[$i]->select('text_tag')->where('text_tag','=',$datatext[$i])->get();
                $val=count($count);
                
               
                if($val==0)
                {
                    $tag[$i]->save();
                }

                 }

                 $id = $request->id;

                $id_tag = $request->id_tag;
                $berita = new Berita();
                $berita->judul_berita = $request->judul_berita;
                $berita->caption = $request->caption;
                $berita->isi_berita = $request->isi_berita;
                $berita->id_berita = $request->id_berita;
                $berita->viewer_count = $request->viewer_count;
                $berita->user_id = $user = Auth::user()->id; 
                $berita->save();

                for($i=0; $i<$total; $i++){

                    $tags = Tag::select('id_tag')->
                    where('text_tag','=',$datatext[$i])->get();
                   
                        $tagss = $tags;
                    
                        
                    $tag_berita = new Tag_berita();
                    $tag_berita->id_berita = $berita->id_berita;
                    $tag_berita->id_tag = $tags[0]->id_tag;
                    $tag_berita->save();
                    }

                    $this->validate($request, [
                        'url_foto'      => 'required',
                        'url_foto.*'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        
                    ]);
                
                    if ($request->hasfile('url_foto')) { 
                        $files = [];
                        foreach ($request->file('url_foto') as $file) {
                            if ($file->isValid()) {
                                $url_foto = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                                $file->move(public_path('storage'), $url_foto);                    
                                $files[] = [
                                    'url_foto' => $url_foto,
                                    'nama' =>  $request->judul_berita,
                                    'jenis' => ('Berita'),
                                    'user_id' => $user = Auth::user()->id,
                                    'id_berita'=> $request->id_berita
                                ];
                            }
                        }
                        Galeri::insert($files);            
                        
                    }
    

                

                
             
                
                DB::commit();
             return redirect(route('berita.index'))->with('pesan-berhasil','Anda berhasil menambah data Berita');
           }catch (\Exception $e){
            return redirect(route('berita.index'))->with('pesan-gagal','Anda gagal menambah data Berita');
           }
    
        }
        
        

          public function delete($id_berita){
            //pastikan ada data

            $tag_berita = Tag_berita::select('berita_tag.*')
            ->where('id_berita','=',$id_berita)->get();

            $galeri = Galeri::select('galeri.*')
            ->where('id_berita','=',$id_berita)->get();

            $berita = Berita::findOrFail($id_berita);
               
           try {
                
                $tag_berita->each->delete();
                $galeri->each->delete();
                foreach ($galeri as $galeri) {
                    File::delete('storage/'.$galeri->url_foto);
                    }
               
                $berita->delete();
               
              return redirect(route('berita.index'))->with('pesan-berhasil','Anda berhasil menghapus data customer');
            }catch (\Exception $e){
             return redirect(route('berita.index'))->with('pesan-gagal','Anda gagal menghapus data customer');
            }
        }

}