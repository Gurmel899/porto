<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use App\Models\sertifikat;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()

    {
        $data=  sertifikat::all();
        return view('dashboard.sertifikat.index',compact('data'));
       
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
            
            $foto_lama= get_meta_value($data);
            File::delete(public_path('image')."/".$foto_lama);
            
            metadata::updateOrCreate(['meta_key'=>'_foto'],['meta_value'=>$foto_lama]);
        }
        return redirect()->route('sertifikat.index')->with('success','Berhasil Melakukan Uploads Data sertifikat');
    }
}