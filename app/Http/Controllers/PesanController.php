<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\TiketModel;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index(){
        return view('pesan');
    }

    public function simpan(Request $request)
    {
        $tiket = TiketModel::create([
            'no_tiket' => $request->no_tiket,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'status' => 0
        ]);
        Session::flash('message', 'Tiket Berhasil Dipesan');
        return redirect('/');
    }
}
