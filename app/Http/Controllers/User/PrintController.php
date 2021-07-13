<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class PrintController extends Controller
{
    public function indexClient(){
        $client = DB::table('penghuni')->get();
 
    	$pdf = PDF::loadview('penghuni_pdf',['pegawai'=>$client]);
    	return $pdf->stream();
    }
}
