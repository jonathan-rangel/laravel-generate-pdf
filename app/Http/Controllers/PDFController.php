<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PDFController extends Controller
{
    public function printPDF() {
        $pdf = PDF::loadView('pdf-file');
        return $pdf->stream();
    }
}
