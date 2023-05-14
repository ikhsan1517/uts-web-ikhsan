<?php

namespace App\Http\Controllers;

use App\Models\MakananTradisional;
use Illuminate\Http\Request;
use App\Http\Requests\MakananTradisionalRequest;

class MakananTradisionalController extends Controller
{
    public function index(){
        $makanan_tradisional = MakananTradisional::get();
        return view('index', compact('makanan_tradisional'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $makanan_tradisional = MakananTradisional::where('id', $id)->first();
        return view('edit', compact('makanan_tradisional'));
    }

    public function lihat($id){
        $makanan_tradisional = MakananTradisional::where('id', $id)->first();
        return view('lihat', compact('makanan_tradisional'));
    }

    public function store(MakananTradisionalRequest $request) 
    { 
        $makanan_tradisional = new MakananTradisional(); 
 
        $makanan_tradisional->jenis_makanan = $request->jenis_makanan; 
        $makanan_tradisional->asal_daerah = $request->asal_daerah; 
        $makanan_tradisional->save(); 
        
        return redirect('/');
    }
 
        public function update(MakananTradisionalRequest $request, $id) 
        { 
            $makanan_tradisional = MakananTradisional::where('id', $id)->first();

        $makanan_tradisional->jenis_makanan = $request->jenis_makanan; 
        $makanan_tradisional->asal_daerah = $request->asal_daerah; 

            $makanan_tradisional->update();

            return redirect('/'); 

    }

    public function hapus($id) 
        { 
            $makanan_tradisional = MakananTradisional::where('id', $id)->first();

            $makanan_tradisional->delete();

            return redirect('/'); 

    }
}