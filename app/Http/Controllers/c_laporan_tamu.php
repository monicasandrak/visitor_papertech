<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;
use App\Models\m_tamu2;
use Illuminate\Support\Facades\Auth;
use DB;

class c_laporan_tamu extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->m_tamu = new m_tamu();
    // }

    public function index()
    {
        $this->m_tamu2 = new m_tamu2();
        $tamu['tamu'] = $this->m_tamu2->get();
        $tamu = DB::table('tamu')->get();
        $data['title'] ='Laporan';
        if (Auth::check()){
            return view('security/v_laporan', $data, compact(['tamu']));
        }
        else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    
    }
    public function laporan(Request $request)
    {
    //      $data = ['tamu' => $this->m_tamu->allData()
    // ];
        // $this->m_tamu2 = new m_tamu2();
        // $data['id_tamu'] = DB::table('tamu')->get('id_tamu');
        // $dari_tanggal= $request->dari_tanggal;
        // $sampai_tanggal= $request->sampai_tanggal;


        $date['datefrom'] = ($request->dari_tanggal. ' 00:00:00');
        $date['datecurrent'] = ($request->sampai_tanggal. ' 23:59:59');
        // var_dump($request);
        // dd();
        // $tamu = tamu::select('tanggal','id_tamu', 'nama_tamu', 'alamat', 'pekerjaan','keperluan','bertemu_dengan','no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->whereBetween(('tanggal'-> $dari_tanggal, $sampai_tanggal)
        //         ->get();
        // $sum_total = tamu::whereBetween(('tanggal',[$dari_tanggal, $sampai_tanggal])
        // ->sum('total');
        $tamu['tamu'] = DB::table('tamu')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $tamu['sum'] = DB::table('tamu')->whereBetween('tanggal', [$date['datefrom'], $date['datecurrent']])->sum('total');

        // $tamu['tamu'] = DB::table('tamu')->whereBetween(('tamu.tanggal'->[$dari_tanggal, $sampai_tanggal]))->get();
        // var_dump($data);
        // dd();
        // $data['tamu'] = DB::table('tamu')->where('tanggal', [$date['datefrom'], $date['datecurrent']])->get();
        // $data['nama_tamu'] = DB::table('tamu')->get('nama_tamu');
        // $data['alamat'] = DB::table('tamu')->get('alamat');
        // $data = DB::table('tamu')
        //         ->select('id_tamu','nama_tamu','alamat','pekerjaan','keperluan','bertemu_dengan', 'no_ktp','foto_ktp','no_kendaraan','jam_masuk','status','hasil_swab')
        //         ->get();
    return view('security/v_print_laporan', $tamu,$date);
    }
}