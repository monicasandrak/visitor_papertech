<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_obat;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class c_laporan_obat extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_obat = new m_obat();
    }
    
    public function index()
    {
        $data = ['obats' => $this->m_obat->allData()
    ];
    if (Auth::check()) {
        if (Auth::user()->level !== 'klinik')
            {
                return back();
            }
        return view('klinik/v_laporan_obat', $data);
    
    }
    else return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
    }
}
