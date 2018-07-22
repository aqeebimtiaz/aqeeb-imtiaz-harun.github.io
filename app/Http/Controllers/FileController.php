<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class FileController extends Controller
{
    //
    public function getDownload(){
    //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/CV_Aqeeb_Imtiaz_Harun.pdf";

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return Response::download($file, 'CV_Aqeeb_Imtiaz_Harun.pdf', $headers);
    }
}
