<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiketModel;
use Session;
class KonsumenController extends Controller
{
    public function index()
    {
        return view('konsumen');
    }
}
