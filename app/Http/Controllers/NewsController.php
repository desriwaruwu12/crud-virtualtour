<?php
namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Headline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
    public function index()
    {
        
        Paginator::useBootstrap(3);
        $galeri = Galeri::distinct('galeri.url_foto')->join
        ('berita', 'berita.id_berita', 'galeri.id_berita')->paginate(3);

        return view('news/news', compact('galeri'));
    }

    public function newsdetail($id_berita)
    {
        
        $berita = Berita::where('id_berita' , $id_berita)->first();
        $sliders = Headline::all();
        return view ('news.newsdetail', [
            'berita' => $berita ,
            'sliders' => $sliders]);
    }
}
