<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Keunggulan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\KeunggulanRequest;

class KeunggulanController extends Controller
{
    public function index(){
        $keunggulans = Keunggulan::all();
        $keunggulans = Keunggulan::select('keunggulan.*','users.name', 'visi')
            ->join('users','users.id','=','keunggulan.users_id')
            ->join('about_us','about_us.id','=','keunggulan.about_us_id')->get();
        return view('admin.page.keunggulan.index', compact('keunggulans'));
    }

    public function create(){
        $abouts = About::all();
        return view('admin.page.keunggulan.create', compact('abouts'));
    }

      public function store(Request $request){

        $users_id = Auth::user()->id;

        $data = Keunggulan::create([
            'keunggulan' => $request->keunggulan,
            'url_metafor' => $request->url_metafor,
            'about_us_id' => $request->about_us_id,
            'users_id' => $users_id = $users_id,
        ]);

        if($data){
            return redirect()->route('keunggulan.index');
        }
    }

    public function edit($id){
        $keunggulan = Keunggulan::findorFail($id);
        return view('admin.page.keunggulan.edit', compact('keunggulan'));
    }

    public function update(Request $request, $id){
        $users_id = Auth::user()->id;
   
        $item = Keunggulan::findorFail($id);
        $item->update([
            'keunggulan' => $request->keunggulan,
            'url_metafor' => $request->url_metafor,
            'users_id   ' => $users_id = $users_id,
        ]);
        return redirect()->route('keunggulan.index');
    }


    public function delete($id){
        $keunggulan = Keunggulan::findOrfail($id);
        $keunggulan->delete();

        return redirect()->route('keunggulan.index');
    }
}