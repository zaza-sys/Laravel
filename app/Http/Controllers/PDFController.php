<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku_masuk;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $buku_masuk = buku_masuk::all();

        $data = [
            'buku_masuk' => $buku_masuk
        ];

        $pdf = PDF::loadView('pdf.laporan', $data);

        return $pdf->download('laporan.pdf');
    }
}
