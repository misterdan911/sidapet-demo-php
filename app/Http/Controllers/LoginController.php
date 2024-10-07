<?php

namespace App\Http\Controllers;

use App\Models\RefVendor;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req) 
    {
        $refVendor = RefVendor::where('kode_vendor', $req->kode_vendor)->first();

        if (empty($refVendor)) {
            return 'Kode Vendor Invalid';
        }
        else {
            $data = [
                'kode_vendor' => $req->kode_vendor,
                'nama_perusahaan' => $refVendor->nama_perusahaan,
                'kode_jenis_vendor' => $refVendor->kode_jenis_vendor,
            ];
            session($data);
        }
        
        return redirect('dashboard');
    }
}
