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

        if (empty($refKatDokumenVendor)) {
            return 'data ref_kat_dokumen_vendor tidak ditemukan';
        }

        $mainStep = [];
        $mainStepCount = 1;
        $mainLastIndex = count($refKatDokumenVendor) - 1;

        $subStep = [];

        $isLastStep = false;

        foreach ($refKatDokumenVendor as $i =>  $data)
        {

            if ($i == $mainLastIndex) {
                $isLastStep = true;
            }

            $mainStep[] = [
                'nama_kategori' => $data->nama_kategori,
                'stepCount' => $mainStepCount,
                'isLastStep' => $isLastStep,
            ];

            $mainStepCount++;

            if (($data->kode_kat_dokumen_vendor == $kode_kat_dokumen_vendor) && ($data->is_has_sub == true)) {
                $refKatDokumenVendor2 = RefKatDokumenVendor::where('main_kat', $kode_kat_dokumen_vendor)
                    ->orderBy('urutan', 'ASC')
                    ->get();

                foreach ($refKatDokumenVendor2 as $i2 => $dataSub) {
                    $subStep[] = [
                        'nama_kategori' => $dataSub->nama_kategori,
                    ];
                }
            }
        }

        $data = [
            'mainSteps' => $mainStep,
            'subSteps' => $subStep,
        ];

        // dd($data);

        return view('maincontent/isidata', $data);

    }
}
