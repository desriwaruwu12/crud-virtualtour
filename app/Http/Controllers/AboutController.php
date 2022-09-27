<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\About;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller
{
    public function index(){
        //untuk list about
        $about = About::latest()->paginate(5);
        Session::put('title','Data About');

        $about = About::all();

        return view('admin.page.about.index',compact('about'));
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return view('about.index', compact('about'));
            } elseif ($user->level == 'editor') {
                return redirect()->intended('editor');
            }
        }

        echo '<script language=JavaScript>alert("Anda belum Login, silahkan login.")             
            onclick=location.href="../login"</script>';

     
    }


    public function add(){
        //menampilkan form tambah
        Session::put('title','Tambah Data About');
        return view('admin.page.about.add');
    }


    public function store(Request $request)
    {  
        $users_id = Auth::user()->id;

         $about = new About();
            $about->visi = $request->visi;
            $about->misi = $request->misi;
            $about->deskripsi = $request->deskripsi;
            $about->no_contact = $request->no_contact;
            $about->alamat = $request->alamat;
            $about->email = $request->email;
            $about->ig_url = $request->ig_url;
            $about->twitter_url = $request->twitter_url;
            $about->fb_url = $request->fb_url;
            $about->youtube_url = $request->youtube_url;
            $about->users_id = $users_id = $users_id;
            


    
            //pesan notifikasi sukses
            //redirect 
            $about->save();
            return redirect()->route('about.index')->with(['success' => 'Data Berhasil Disimpan!']);
            
    }

    public function edit($id){
        //menampilkan form ubah
        $abouts = About::findOrFail($id);
        return view('admin.page.about.edit',compact('abouts'));
    }

    public function update(Request $request, $id){

        $users_id = Auth::user()->id;
        $user = Auth::user()->id; 
        
        $item = About::findorFail($id);
        // $item->update($request->all());
        $item->update([
        'visi' => $request->visi,
        'misi' => $request->misi,
        'deskripsi' => $request->deskripsi,
        'no_contact' => $request->no_contact,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'ig_url' => $request->ig_url,
        'twitter_url' => $request->twitter_url,
        'fb_url' => $request->fb_url,
        'youtube_url' => $request->youtube_url,
        'users_id   ' => $users_id = $users_id,
        ]);    

        return redirect()->route('about.index');
    }

    public function destroy($id)
    {
        $item = About::find($id);
        //delete artikel
        $item->delete();

        //redirect to index
        return redirect()->route('about.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }    
}