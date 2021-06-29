<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class CetakPdf extends Controller
{
    //
    public function cetak()
    {   
        $pdf = PDF::loadView('cetak');
        return $pdf->download('oke.pdf');
    }
}
