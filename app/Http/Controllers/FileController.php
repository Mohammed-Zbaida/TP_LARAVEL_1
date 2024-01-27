<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileController extends Controller
{
    public function showDownloadButton()
    {
        return view('reda');
    }

    public function downloadFile()
    {
        $file = public_path('files/usa.pdf');
        $headers=['content-Type:application/pdf'];
        $name='today-pdf-Filesss'.time().'.pdf';
        return response()->download($file ,$name , $headers);
    }
}

