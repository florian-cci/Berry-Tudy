<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Enfant;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF($title,$type,$id)
 
    {
        if($type=="enfant"){
            $info = Enfant::find($id);
        }
        $data = [
            'title' => $title,
            'info' => $info
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
        $name=$title."_".$id.".pdf";
        return $pdf->download($name.'.pdf');
    }
}
