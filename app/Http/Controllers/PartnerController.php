<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(){
        $partner = Partner::all();
        return view('partner.index', compact('partner'));
    }

    public function create(){
        return view ('partner.create');
    }

    public function store(Request $req){
    
        //upload url_foto
    $icon = $req->file('icon');
    $icon->storeAs('public', $icon->hashName());

    Partner::create([
        'label'     => $req->label,
        'icon'     => $icon->hashName(),
        'link'   => $req->link,
    ]);

    return redirect()->route('partner.index');
    }

    public function edit($id){
        $partner = Partner::findOrFail($id);
        return view('partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
    $partner = Partner::findOrFail($id);
    
    //check if url_foto is uploaded
    if ($request->hasFile('icon')) {

        //upload new url_foto
        $icon = $request->file('icon');
        $icon->storeAs('public', $icon->hashName());

        //delete old url_foto
        Storage::delete('public/'.$partner->icon);

        //update post with new url_foto
        $partner->update([  
            'icon'     => $icon->hashName(),
            'label'     => $request->label,
            'link'   => $request->link,
        ]);

    } else {

        //update post without url_foto
        $partner->update([
            'label'     => $request->label,
            'link'   => $request->link,
        ]);
    }


    //redirect to index
    return redirect()->route('partner.index')->with(['success' => 'Data Berhasil Diubah!']);
}

public function destroy($id)
{
    //delete url_foto
    $partner = Partner::findOrFail($id);
    Storage::delete('public/'. $partner->icon);

    //delete post
    $partner->delete();

    //redirect to index
    return redirect()->route('partner.index')->with(['success' => 'Data Berhasil Dihapus!']);

}

}
