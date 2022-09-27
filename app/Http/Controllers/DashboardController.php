<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Partner;
use App\Models\Destinasi;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){

        $berita = Berita::count();
        $destinasi = Destinasi::count();
        $galeri = Galeri::count();
        $testimoni = Testimoni::count();
        $staff = Staff::count();
        $partner = Partner::count();

        return view('admin.page.dashboard', compact('berita', 'destinasi', 'galeri', 'testimoni', 'staff', 'partner'));
    }
}