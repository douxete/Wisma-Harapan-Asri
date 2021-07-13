<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = DB::table('pegawai')
            ->select('pegawai.id', 'pegawai.nama', 'pegawai.posisi')
            ->get();
        return view('admin.dataPegawai', compact('pegawai'));
    }

    public function create(){
        return view('admin.tambahPegawai');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
        ]);

        DB::table('pegawai')
            ->insert([
                'nama' => $request->nama,
                'posisi' => $request->posisi
            ]);
        
        return redirect('/admin/dataPegawai');
    }

    public function edit($id){
        $pegawai = DB::table('pegawai')
            ->select('pegawai.id', 'pegawai.nama', 'pegawai.posisi')
            ->where('pegawai.id', $id)
            ->first();
        return view('admin.editPegawai', compact('pegawai'));
    }

    public function update(Request $request){
        DB::table('pegawai')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'posisi' => $request->posisi
            ]);
        return redirect('/admin/dataPegawai');
    }

    public function delete($id){
        DB::table('pegawai')
            ->where('id', $id)
            ->delete();
        return redirect('/admin/dataPegawai');
    }
}
