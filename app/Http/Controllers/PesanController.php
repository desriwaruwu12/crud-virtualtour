<?php

namespace App\Http\Controllers;

use App\Http\Requests\VirtualRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Virtualtour;
use Illuminate\Support\Carbon;
use App\Models\Pesan;
use PDF;


class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index($virtual_tour_id)
    {
          $virtual_tour = Virtualtour::all()->where('virtual_tour_id', $virtual_tour_id);
            return view('frontend.virtual.detailvirtual',  compact('virtual_tour'));
    }

    public function cetak_pdf($pemesanan_virtual_tour_id)
    {
        $pemesanan_virtual_tour = Pemesanan::all()->where('pemesanan_virtual_tour_id', $pemesanan_virtual_tour_id)->first();
        $virtual_tour = Virtualtour::all()->where('virtual_tour_id','=', $pemesanan_virtual_tour->virtual_tour_id)->first();
        $pdf = PDF::loadView('frontend.virtual.pdf',['virtual_tour'=>$virtual_tour]);

        return $pdf->download('Invoice.pdf');
    }


    public function pesan(Request $request, $virtual_tour_id)
    {
        $request->validate([
            'captcha' => 'captcha',
        ]);
        $pemesanan_virtual_tour = Pemesanan::where('virtual_tour_id', $virtual_tour_id)->first();
        $tanggal_pemesanan = Carbon::now();
        //simpan ke pesan
        $pemesanan_virtual_tour = new Pemesanan;
        $pemesanan_virtual_tour->costumer_id = Auth::user()->id;
        $pemesanan_virtual_tour->tanggal_pemesanan = $tanggal_pemesanan;
        $pemesanan_virtual_tour->virtual_tour_id =$virtual_tour_id;
        $pemesanan_virtual_tour->save();
        //simpan
        return redirect(route('virtual.pesan1', $pemesanan_virtual_tour->pemesanan_virtual_tour_id))->with('pesan-berhasil','Anda berhasil menambah data produk');;
    }

}
