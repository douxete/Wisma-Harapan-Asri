<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class ClientController extends Controller
{
    public function index(){
        $penghuni = DB::table('penghuni')
            ->select('penghuni.id', 'pj.nama', 'penghuni.namaLengkap', 'penghuni.ruang')
            ->leftJoin('pj', 'pj.id', 'penghuni.pjid')
            ->paginate(10);
        return view('user.index', compact('penghuni'));
    }

    public function create(){
        $pj = DB::table('pj')->get();
        return view('user.tambahClient', compact('pj'));
    }

    public function store(Request $request){
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);
  
        // $imageName = time().'.'.$request->image->extension();  
   
        // $request->image->move(public_path('images'), $imageName);

        // $path = $request->image->move(public_path('images'), $imageName);

        DB::table('penghuni')->insert([
            'pjid' => $request->pj,
            'namaLengkap' => $request->namalengkap,
            'namaPanggilan' => $request->namepgl,
            'tgllahir' => $request->tgllahir,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'asalDaerah' => $request->asal,
            'ruang' => $request->ruang,
            'tglMasuk' => $request->tglmasuk,
        ]);

        return redirect('user/dashboard');
    }

    public function delete($id){
        $client = DB::table('penghuni')->where('id','=',$id)->delete();
        return redirect('user/dashboard');
    }

    public function edit($id){
        $pj = DB::table('pj')->get();
        return view('user.editClient', compact('pj'));
    }

    public function update(Request $request, $id){
        DB::table('penghuni')->where('id', '=',$id)
        ->update(['pjid' => $request->pj],
        ['namaLengkap' => $request->namalengkap],
        ['namaPanggilan' => $request->namepgl],
        ['tgllahir' => $request->tgllahir],
        ['gender' => $request->gender],
        ['agama' => $request->agama],
        ['alamat' => $request->alamat],
        ['notelp' => $request->notelp],
        ['asalDaerah' => $request->asal],
        ['ruang' => $request->ruang],
        ['tglMasuk' => $request->tglmasuk]);
        return redirect('user/dashboard');
    }

    public function printClient(){
        $penghuni = DB::table('penghuni')
            ->select('penghuni.id', 'pj.nama', 'penghuni.namaLengkap', 'penghuni.ruang')
            ->leftJoin('pj', 'pj.id', 'penghuni.pjid')
            ->get();
 
    	$pdf = PDF::loadview('user.penghuni_pdf',['penghuni'=>$penghuni]);
    	return $pdf->download('daftar_penghuni.pdf');
    }

}
