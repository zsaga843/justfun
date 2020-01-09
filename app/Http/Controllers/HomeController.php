<?php

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use PDF;

  

class HomeController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF()

    {
        $customPaper = array(0,0,720,1440);

        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('myPDF', $data)->setPaper('A4','portrait')->setWarnings(false);
        $pdf->setEncryption('123');
        return $pdf->download('it.pdf');

    }

    /**
     * Set the paper size (default A4)
     *
     * @param string $paper
     * @param string $orientation
     * @return $this
     */
    public function setPaper($paper, $orientation = 'portrait'){
        $this->paper = $paper;
        $this->orientation = $orientation;
        $this->dompdf->setPaper($paper, $orientation);
        return $this;
    }


}
