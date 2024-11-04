<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
   public function report1($pid)
   {
    $payments = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin: 20px; padding:20px;' >";
    $print.= "<h1 align='center' > Payment Receipt  </h1>";
    $print.= "<hr/>";
    $print.= "<p> Student Name : <b>". $payments->enrollment->student->name. "</b></p>";
    $print.= "<p> Enrollment No : <b>" . $payments->enrollment->enroll_no . "</b></p>";
    $print.= "<p> Receipt Number : <b>" .$pid. "</b></p>";
    $print.= "<p> Date : <b>" . $payments->paid_data . "</b> </p>";
    
    

    $print.= "<hr/>";

 // table creation
    $print.= "<p>";
    $print.= "<table style='width: 100%'>"; 

    $print.= "<tr>";
    $print.= "<td>Batch</td>";
    $print.= "<td>Amount</td>";
    $print.= "</tr>";

    $print.= "<tr>";
    $print.= "<td> <h3>". $payments->enrollment->batches->name . "</h3></td>";
    $print.= "<td> <h3>" . $payments->amount  . "</h3> </td>";
    $print.= "</tr>";

    $print.= "</table>"; 
    $print.= "</p>";

    $print.= "<hr/>";
    

    $print.= "<span> Printed Date: <b>" . date('Y/m/d   h:i:s A') . "</b> </span>";
   
    
    
    $print.= "</div>";

    $pdf->loadHTML($print);
    return $pdf->stream();
   }

}

?>;
<!--$print.= "<p>";
    $print.= "<table style='width: 100%'>";
    $print.= "<tr>";
    $print = "<td>Description</td>";
    $print.= "<td>Amount</td>";
    $print.= "</tr>";
    $print.= "<tr>";
    $print.= "<td> <h3>" . $payments->enrollment->batches->name . "</h3> </td>";
    $print.= "<td> <h3>" . $payments->amount . "</h3> </td>";
    $print.= "</tr>";
    $print.= "</table>";
    $print.= "</p>";
    -->