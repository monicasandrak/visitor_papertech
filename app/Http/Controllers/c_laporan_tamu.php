<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;
use App\Models\m_tamu2;
use App\Models\Tamu;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\Illuminate\Support\Collection;

class c_laporan_tamu extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->m_tamu = new m_tamu();
    // }

    public function index(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $tamu = DB::table('tamu')
        ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk','pemeriksa_tamu', 'status', 'swab', 'hasil_swab')
        ->where('status', 'disetujui')
        // ->where('swab', 'tidak swab')
        // ->orWhere('hasil_swab', 'negatif')
        ->get();
        if (Auth::check()){
            return view('security/v_laporan_tamu',  compact(['tamu', 'fromDate', 'toDate']));
        }
        else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    
    }

    public function filter(Request $request)
    {
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $hasil_swab = DB::table('tamu')
           ->whereNull('hasil_swab');
                

        
        //    $tamu = DB::table('tamu')
        // //    ->where('swab', 'tidak wajib swab')
        //    ->whereNot(function($query){
        //     $query->where('status', 'tidak disetujui')
        //         ->orwhere('hasil_swab', 'positif');
        //    })
        //    ->whereBetween('tanggal', [$fromDate, $toDate])
        //    // ->where('tanggal', '>=', $fromDate)
        //    // ->where('tanggal', '<=', $toDate)
        //    ->get();

        //    $tamu = DB::table('tamu')
           
        //    ->where('swab', 'tidak wajib swab')
        //    ->orWhere(function($query){
        //          $query->where('swab', 'wajib swab')
        //                 ->where('hasil_swab', 'negatif');
        //    })
        //    ->whereBetween('tanggal', [$fromDate, $toDate])
        //    // ->where('tanggal', '>=', $fromDate)
        //    // ->where('tanggal', '<=', $toDate)
        //    ->get();

           $tamu = DB::table('tamu')
           ->where('tanggal', '>=', $fromDate)
           ->where('tanggal', '<=', $toDate)
           
           ->where('status', 'disetujui')
        //    ->union($hasil_swab)
        //    ->whereBetween('tanggal', [$fromDate, $toDate])
           
           ->get();
       
           
           

          
        // dd($tamu);

        return view('security/v_laporan_tamu',  compact(['tamu','fromDate', 'toDate']));

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
    return view('security/cc', $tamu,$date);
    }

    // public function laporantamu ()
    // {
    //     $tamu = DB::table('tamu')
    //     ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_laporan',  compact(['tamu']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    // }

    // public function cetak_tamu(Request $request)
    // {
    //     $tamu = DB::table('tamu')
    //     ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //     ->where('status', 'disetujui')
    //     ->get();
    //     if (Auth::check()){
    //         return view('security/v_cetak_tamu',  compact(['tamu']));
    //     }
    //     else return redirect()->route('login')->with('eror', 'Silahkan login terlebih dahulu');
    
    // }

    // public function cetak_tamu(Request $request)
    // {
    //     $tgl_mulai = $request->tgl_mulai;
    //     $tgl_selesai = $request->tgl_selesai;

    //     if ($tgl_mulai AND $tgl_selesai){
    //         $tamu = DB::table('tamu')
    //                 ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //                 ->where('status', 'disetujui')
    //                 ->whereBetween('tanggal', [$tgl_mulai, $tgl_selesai])
    //                 ->get();
    //     }
    //         else{
    //             $tamu = DB::table('tamu')
    //             ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
    //             ->where('status', 'disetujui')
    //             ->get();
    //     }
    //     return view ('security/v_cetak_laporan_tamu', compact(['tamu', 'tgl_mulai', 'tgl_selesai']));

    // }
    public function lihatlaporan ($dari_tanggal, $sampai_tanggal)
    {
        // dd (["Dari Tanggal : ".$dari_tanggal, "Sampai Tanggal : ".$sampai_tanggal]);

        $tamu = DB::table('tamu')
        ->select('id_tamu', 'tanggal', 'nama_tamu', 'alamat', 'pekerjaan', 'keperluan', 'bertemu_dengan', 'no_ktp', 'foto_ktp', 'no_kendaraan','jam_masuk', 'status', 'hasil_swab')
        ->where('status', 'disetujui')
        ->whereBetween('tamu.tanggal', [$dari_tanggal, $sampai_tanggal])->get();
    return view ('security/v_laporan_tamu', compact(['tamu', 'dari_tanggal', 'sampai_tanggal']));
    }
}
