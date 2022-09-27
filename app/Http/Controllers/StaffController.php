<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
     
        $staff = Staff::latest()->paginate(5);
        return view('staff.index', compact('staff'));
    }
    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'posisi'   => 'required',
            'deskripsi' => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/staff', $image->hashName());

        //create staff
        Staff::create([
            'nama'     => $request->nama,
            'posisi'   => $request->posisi,
            'deskripsi'     => $request->deskripsi,
            'image'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }
    public function update(Request $request, Staff $staff)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'posisi'   => 'required',
            'deskripsi' => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/staff', $image->hashName());

            //delete old image
            Storage::delete('public/staff/'.$staff->image);

            //update staff with new image
            $staff->update([
            'nama'     => $request->nama,
            'posisi'   => $request->posisi,
            'deskripsi'  => $request->deskripsi,
            'image'     => $image->hashName(),
            ]);

        } else {

            //update post without image
            $staff->update([
            'nama'     => $request->nama,
            'posisi'   => $request->posisi,
            'deskripsi'  => $request->deskripsi,
            ]);
        }

        //redirect to index
        return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Staff $staff)
    {
        //delete image
        Storage::delete('public/staff/'. $staff->image);

        //delete staff
        $staff->delete();

        //redirect to index
        return redirect()->route('staff.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}