<?php

namespace App\Http\Controllers;

use App\Models\RefKatDokumenVendor;
use Illuminate\Http\Request;

class IsiDataController extends Controller
{
    public function showIsiData(Request $req, $kode_kat_dokumen_vendor)
    {
        $kode_jenis_vendor = session('kode_jenis_vendor');

        $refKatDokumenVendor = RefKatDokumenVendor::where('kode_jenis_vendor', $kode_jenis_vendor)
        ->where('is_main', true)
        ->orderBy('urutan', 'ASC')
        ->get();

        dd($refKatDokumenVendor);
    }
}
