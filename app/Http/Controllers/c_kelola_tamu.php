<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_tamu;


class c_kelola_tamu extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->m_tamu = new m_tamu();
    }
    public function index() 
    {
        $data = ['tamu' => $this->m_tamu->allData()
    ];
    return view('security/v_kelola_tamu', $data);
    }

    public function detail($id_tamu)
    {
        if(!$this->m_tamu->detailData($id_tamu))
        {abort(404);
        }
        $data = ['tamu' => $this->m_tamu->detailData($id_tamu)
    ];
    return view('security/v_detailtamu',$data);
    }

    public function add()
    {
        $id_baru = [ 'id_baru' => $this->m_tamu->id_baru()];
        $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];
        $dropdown2 = ['Negatif','Positif'];
        return view('security/v_addtamu', $id_baru, compact(['dropdown',['dropdown2']]));
    }

    public function insert()
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'keperluan' => 'required',
            'bertemu_dengan' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => 'required|mimes:jpg,png,jpeg,bmp|max:1024',
            'no_kendaraan' => 'required',
            'status'=>'required',
            'jam_masuk' => 'required',  
        ],[
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_tamu.required' => 'Nama tamu wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'pekerjaan.required' => 'Pekerjaan wajib diisi !',
            'keperluan.required' => 'Keperluan wajib diisi !',
            'bertemu_dengan' => 'Bertemu dengan wajib diisi !',
            'no_ktp.required' => 'No KTP wajib diisi !',
            'no_ktp.min' => 'No KTP harus 16 karakter !',
            'no_ktp.max' => 'No KTP harus 16 karakter !',
            'foto_ktp.required' => 'Foto KTP wajib diisi !',
            'no_kendaraan.required' => 'No kendaraan wajib diisi !',
            'jam_masuk.required' => 'Jam masuk wajib diisi !', 
            'status.required' => 'Status wajib diisi !',
        ]);
        $file = Request()->foto_ktp;
        $fileName = Request()->id_tamu .'.'. $file->extension();
        $file->move(public_path('foto_ktp'),$fileName);
        $datetime = date("d F Y");
        // $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];

        $data = [
            'id_tamu' => Request()->id_tamu,
            'tanggal' => $datetime,
            'nama_tamu' => Request()->nama_tamu,
            'alamat' => Request()->alamat,
            'pekerjaan' => Request()->pekerjaan,
            'keperluan' => Request()->keperluan,
            'bertemu_dengan' => Request()->bertemu_dengan,
            'no_ktp' => Request()->no_ktp,
            'foto_ktp' => $fileName,
            'no_kendaraan' => Request()->no_kendaraan,
            'jam_masuk' => Request()->jam_masuk,
            'status' => Request()->status,
            'hasil_swab' => Request()->hasil_swab,
        ];
        $this->m_tamu->addData($data);
        return redirect()->route('tamu')->with('pesan', 'Data berhasil ditambahkan !');
    }
    
    public function edit($id_tamu)
    {
        if(!$this->m_tamu->detailData($id_tamu))
        {abort(404);
        }

        $data = ['tamu' => $this->m_tamu->detailData($id_tamu)];
        $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];
        $dropdown2 = ['Negatif','Positif'];
        return view('security/v_edittamu',$data, compact(['dropdown','dropdown2']));
    }

    public function update($id_tamu)
    {
        Request()->validate([
            // 'tanggal' => 'required',
            'nama_tamu' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'keperluan' => 'required',
            'bertemu_dengan' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => '|mimes:jpg,png,jpeg,bmp|max:1024',
            'no_kendaraan' => 'required',
            'jam_masuk' => 'required',  
            // 'status' => 'required',
        ], [
            // 'tanggal.required' => 'Tanggal wajib diisi !',
            'nama_tamu.required' => 'Nama tamu wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'pekerjaan.required' => 'Pekerjaan wajib diisi !',
            'keperluan.required' => 'Keperluan wajib diisi !',
            'bertemu_dengan' => 'Bertemu dengan wajib diisi !',
            'no_ktp.required' => 'No KTP wajib diisi !',
            'no_ktp.min' => 'No KTP harus 16 karakter !',
            'no_ktp.max' => 'No KTP harus 16 karakter !',
            'no_kendaraan.required' => 'No kendaraan wajib diisi !',
            'jam_masuk.required' => 'Jam masuk wajib diisi !', 
            // 'status' => 'Status wajib diisi !',
        ]);
        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->foto_ktp  <> "") {
            //jika ganti gambar/foto
            $file = Request()->foto_ktp;
            $fileName = Request()->id_tamu .'.'. $file->extension();
            $file->move(public_path('foto_ktp'),$fileName);
            $file2 = Request()->status;
            $fileStatus = Request()->id_tamu.'.'. $file2->extension();
            $file2->move(public_path('status'),$fileStatus);
            $dropdown = ['Disetujui','Belum Disetujui','Tidak Disetujui'];
            $datetime = date("d F Y");

            $data = [
            'id_tamu' => Request()->id_tamu,
            'tanggal' => $datetime,
            'nama_tamu' => Request()->nama_tamu,
            'alamat' => Request()->alamat,
            'pekerjaan' => Request()->pekerjaan,
            'keperluan' => Request()->keperluan,
            'bertemu_dengan' => Request()->bertemu_dengan,
            'no_ktp' => Request()->no_ktp,
            'foto_ktp' => $fileName,
            'no_kendaraan' => Request()->no_kendaraan,
            'jam_masuk' => Request()->jam_masuk,
            'status' => Request()->status,
            'hasil_swab' => Request()->hasil_swab,
            ];
            $this->m_tamu->editData($id_tamu,$data);
        }
        else {
            //jika tidak ganti gambar/foto
            $data = [
            'id_tamu' => Request()->id_tamu,
            // 'tanggal' => Request()->tanggal,
            'nama_tamu' => Request()->nama_tamu,
            'alamat' => Request()->alamat,
            'pekerjaan' => Request()->pekerjaan,
            'keperluan' => Request()->keperluan,
            'bertemu_dengan' => Request()->bertemu_dengan,
            'no_ktp' => Request()->no_ktp,
            'no_kendaraan' => Request()->no_kendaraan,
            'jam_masuk' => Request()->jam_masuk,
            'hasil_swab' => Request()->hasil_swab,
            // 'status' => Request()->status,
            ];
            $this->m_tamu->editData($id_tamu,$data);
        
        }
        
        return redirect()->route('tamu')->with('pesan', 'Data berhasil diupdate !');

    }

    public function delete($id_tamu)
    {
        //hapus atau delete foto
        $tamu = $this->m_tamu->detailData($id_tamu);
        if ($tamu->foto_ktp <> "") {
        unlink(public_path('foto_ktp'). '/' . $tamu->foto_ktp);
        }
        $this->m_tamu->deleteData($id_tamu);
        return redirect()->route('tamu')->with('pesan','Data berhasil dihapus !');
    }

    // public function status($id_tamu)
    // {
    //     //hapus atau delete foto

    //     $tamu = $this->m_tamu->detailData($id_tamu);
    //     if ($tamu->foto_ktp <> "") {
    //         unlink(public_path('foto_ktp'). '/' . $tamu->foto_ktp);
    //     }
    //     $this->m_tamu->deleteData($id_tamu);
    //     return redirect()->route('tamu')->with('pesan','Data berhasil disetujui !');
    // }

}

