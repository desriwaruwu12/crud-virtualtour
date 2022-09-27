<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Testimoni;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\About;
use App\Models\Staff;
use App\Models\Partner;
use App\Models\Headline;
use App\Models\Keunggulan;
use App\Models\Virtualtour;
use App\Models\Pemesanan;
use Illuminate\Pagination\Paginator;




class HomeController extends Controller
{

    public function index(){
        $testimonial = Testimoni::paginate(3);//paginate(3)
        $berita1 = Berita::select('berita.*','users.name')
                    ->join('users','users.id','=','berita.user_id')->limit(3)->get();
        $partner = Partner::paginate(4);
        $destinasi = Destinasi::paginate(3);
        $sliders = Headline::all();

        return view('home', compact('testimonial','berita1','partner','destinasi','sliders'));
    }


    public function destinasidetail($iddestinasi) {
        $itemdestinasi = Destinasi::where('id', $iddestinasi)
                            ->first();
        // if ($itemdestinasi) {
        //     $datades = array('nama_destinasi' => $itemdestinasi->nama_destinasi,
        //                 'itemdestinasi' => $itemdestinasi);
            return view('frontend.detail', ['itemdestinasi' => $itemdestinasi]);
        // } else {
        //     // kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
        //     return abort('404');
        // }
    }


    public function destinasi(){
        $destinasi = Destinasi::all();
        return view('frontend.destinasi', compact('destinasi'));
    }

    public function work(){
        return view('frontend.work');
    }

    public function research(){
        return view('frontend.research');
    }

    public function training(){
        return view('frontend.t&w');
    }

    public function gallery(){
        $posts = Galeri::all();
        return view('frontend.gallery', compact('posts'));
    }

    public function media(){
        return view('frontend.media');
    }

    public function detail(){
        $destinasi = Destinasi::paginate(1);

        return view('frontend.detail', compact('destinasi'));
    }

    public function testimoni(){
        $testimonial = Testimoni::All();

        return view('frontend.testimoni', compact('testimonial'));
    }

    public function partner(){
        $partner = Partner::All();

        return view('frontend.partner', compact('partner'));
    }

    public function about(){


        $staff = Staff::all();
        $keunggulan = Keunggulan::paginate(5);
        $about = About::all();
        return view('frontend.about',  compact('about','staff','keunggulan'));

    }
    public function news()
    {

        Paginator::useBootstrap(3);
        $galeri = Galeri::distinct('galeri.url_foto')->join
        ('berita', 'berita.id_berita', 'galeri.id_berita')->paginate(3);

        return view('news.news', compact('galeri'));
    }
    public function virtualtour(){
        $virtual_tour = VirtualTour::all();
        return view('frontend.virtualtour',  compact('virtual_tour'));
    }


    public function detailvirtual($virtual_tour){
        $virtual_tour = Virtualtour::all()->where('virtual_tour_id', $virtual_tour)->first();
        return view('frontend.virtualtour.detailvirtual',  compact('virtual_tour'));
    }

    public function invoice($virtual_tour_id){
        $virtual_tour = Virtualtour::findOrFail($virtual_tour_id);
        $virtual_tour = Virtualtour::all();
        return view('frontend.virtualtour.invoice',  compact('virtual_tour'));
    }

    public function pembayaran(){
        $virtual_tour = Virtualtour::all();
        return view('frontend.virtualtour.invoice2');
    }

    public function pesan1($pemesanan_virtual_tour_id){
        $pemesanan_virtual_tour = Pemesanan::all()->where('pemesanan_virtual_tour_id', $pemesanan_virtual_tour_id)->first();
        $virtual_tour = Virtualtour::all()->where('virtual_tour_id','=', $pemesanan_virtual_tour->virtual_tour_id)->first();

        return view('frontend.virtualtour.pesan1', compact('pemesanan_virtual_tour','virtual_tour', 'pemesanan_virtual_tour_id'));
    }

    public function virtual(){
        return view('frontend.virtualtour');
    }

    public function vdetail(){
        return view('frontend.vdetail');
    }

//    public function midtrans(Request $request) {
//        // Set your Merchant Server Key
//        \Midtrans\Config::$serverKey = 'SB-Mid-server-BUKId8tZog9LvXPKa1ZOCFY7';
//        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
//        \Midtrans\Config::$isProduction = false;
//        // Set sanitization on (default)
//        \Midtrans\Config::$isSanitized = true;
//        // Set 3DS transaction for credit card to true
//        \Midtrans\Config::$is3ds = true;
//
//        $params = array(
//            'transaction_details' => array(
//                'order_id' => rand(),
//                'gross_amount' => 10000,
//            ),
//            'customer_details' => array(
//                'first_name' => 'budi',
//                'last_name' => 'pratama',
//                'email' => 'budi.pra@example.com',
//                'phone' => '08111222333',
//            ),
//        );
//
//        $snapToken = \Midtrans\Snap::getSnapToken($params);
//
//        return view('midtrans', ['snap_token'=>$snapToken]);
//    }

}
