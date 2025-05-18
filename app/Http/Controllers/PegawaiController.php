<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // Tampilkan data
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('index', ['pegawai' => $pegawai]);
    }

    // Tambah data
    public function tambah()
    {
        return view('tambah');
    }

    // Store data
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);
        return redirect('/pegawai');
    }

    // Edit data
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        return view('edit', ['pegawai' => $pegawai]);
    }

    // Update data
    public function update(Request $request)
    {
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);
        return redirect('/pegawai');
    }

    // Delete data
    public function delete($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }
}
