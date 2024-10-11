<?php

namespace App\Http\Controllers;

use App\Models\RefItemTanya;
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
        $subStepCount = 1;


        foreach ($refKatDokumenVendor as $i =>  $data)
        {
            $isLastStep = false;
            if ($i == $mainLastIndex) {
                $isLastStep = true;
            }

            $mainStep[] = [
                'nama_kategori' => $data->nama_kategori,
                'stepCount' => $mainStepCount,
                'isLastStep' => $isLastStep,
            ];

            $mainStepCount++;

            // Sub Step
            if (($data->kode_kat_dokumen_vendor == $kode_kat_dokumen_vendor) && ($data->is_has_sub == true)) {
                $refKatDokumenVendor2 = RefKatDokumenVendor::where('main_kat', $kode_kat_dokumen_vendor)
                    ->orderBy('urutan', 'ASC')
                    ->get();

                $subLastIndex = count($refKatDokumenVendor2) - 1;

                foreach ($refKatDokumenVendor2 as $i2 => $dataSub) {

                    $isLastStep = false;
                    if ($i2 == $subLastIndex) {
                        $isLastStep = true;
                    }

                    $subStep[] = [
                        'nama_kategori' => $dataSub->nama_kategori,
                        'stepCount' => $subStepCount,
                        'isLastStep' => $isLastStep,
                    ];

                    $subStepCount++;
                }
            }
        }

        $refItemTanya = RefItemTanya::where('kode_jenis_vendor', $kode_jenis_vendor)
            ->where('kode_kat_dokumen_vendor', $kode_kat_dokumen_vendor)
            ->get();

            
        if (empty($refItemTanya)) {
            return "Item tanya tidak ditemukan";
        }
            
        $arrItemTanya = [];

        foreach($refItemTanya as $itemTanya) {
            $arrItemTanya[] = [
                'nama_item' => $itemTanya->nama_item,
                'tipe_input' => $itemTanya->tipe_input,
                'metadata' => $itemTanya->metadata,
            ];
        }

        $data = [
            'mainSteps' => $mainStep,
            'subSteps' => $subStep,
            'itemTanya' => $arrItemTanya,
        ];

        dd($data);

        return view('maincontent/isidata', $data);
    }
}
