<?php

namespace App\Http\Controllers;

use PDF;

class pdfGenerator extends Controller
{
    //
    public function downloadTemplate1(){

        $pdf = PDF::loadView('templateOne')->setPaper('A4', 'portrait');
        return $pdf->download('templateOne.pdf');
    }

    //
    public function downloadTemplate2(){

        $pdf = PDF::loadView('templateTwo')->setPaper('A4', 'portrait');
        return $pdf->download('templateTwo.pdf');
    }

    //
    public function downloadTemplate3(){

        $pdf = PDF::loadView('templateThree')->setPaper('A4', 'portrait');
        return $pdf->download('templateThree.pdf');
    }

    //
    public function downloadTemplate4(){

        $pdf = PDF::loadView('templateFour')->setPaper('A4', 'portrait');
        return $pdf->download('templateFour.pdf');
    }

    //
    public function downloadTemplate5(){

        $pdf = PDF::loadView('templateFive')->setPaper('A4', 'portrait');
        return $pdf->download('templateFive.pdf');
    }
}
