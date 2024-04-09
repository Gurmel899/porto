<?php

namespace App\Http\Controllers;

use App\Models\sertifikat;

use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()

    {
        $data=  sertifikat::all();
        return view('dashboard.depan.index',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namafile' => 'required',
            'namafile.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2048'
        ]);
        if ($request->hasfile('namafile')) { 
            $data = [];
            foreach ($request->file('namafile') as $image) {
                if ($image->isValid()) {
                    $name = round(microtime(true) * 1000).'-'.str_replace(' ','-',$image->getClientOriginalName());
                    $image->move(public_path('image'), $name);                    
                    $data = [
                        'namafile' => $name,
                    ];
              
                }
            }
            sertifikat::insert($data);          
        }
        return redirect()->route('sertifikat.index')->with('success','Berhasil Melakukan Uploads Data sertifikat');
    }
}