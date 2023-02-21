<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TiketModel;
use Session;

class TiketController extends Controller
{
    public function tampiltiket()
    {
        $tiket = TiketModel::select('*')
        ->get();
        return view('tampiltiket', ['tiket' => $tiket]);
        // return view('tampiltiket');
    }

    public function tambahtiket()
    {
        return view('tambahtiket');
    }

    public function simpantiket(Request $request)
    {
        $tiket = TiketModel::create([
            
                'no_tiket' => $request->no_tiket,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'status' => 0
            ]);

        return redirect()->route('tampiltiket');
    }

    public function ubahtiket($id_tiket)
    {
        $tiket = TiketModel::select('*')
        ->where('id_tiket',$id_tiket)
        ->get();

        return view('ubahtiket',['tiket' => $tiket]);
    }

    public function updatetiket(Request $request)
    {
        $tiket = Tiketmodel::where('id_tiket', $request->id_tiket)
        ->update([
                'no_tiket' => $request->no_tiket,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'status' => $request->status
            ]);
        
        return redirect()->route('tampiltiket');
    }

    public function laporan()
    {
        $tiket = TiketModel::select('*')
        ->get();
        return view('laporan', ['tiket' => $tiket]);
        // return view('tampiltiket');
    }

    public function hapustiket($id_tiket)
    {
        $tiket = TiketModel::where('id_tiket', $id_tiket)
        ->delete();

        return redirect()->route('tampiltiket');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $tiket = TiketModel::where('no_tiket','like','%'.$search.'%')->paginate(2);
        return view('index', ['tiket' => $tiket]);
        
    }
    
}
