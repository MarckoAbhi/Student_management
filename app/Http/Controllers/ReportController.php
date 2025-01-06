<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::findOrFail($pid);

        $print = "<div style='margin:20px; padding:20px'>";
        $print .= "<h1 style='text-align:center'>Payment Report</h1>";
        $print .= "<hr/>";
        $print .= "<p>Receipt No: <b>" . $pid . "</b></p>";
        $print .= "<p>Payment Date: <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment No: <b>" . $payment->enrollment->enroll_no . "</b></p>";
        $print .= "<p>Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";

        $print .= "<hr/>";
        $print .= "<table style='width:100%'>";
        $print .= "<tr>";
        $print .= "<td>Description</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td><h3>" . $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td><h3>" . $payment->amount . "</h3></td>";
        $print .= "</tr>";
        
        $print .= "</table>";
        $print .= "<hr/>";

        $print .= "<span>Printed by: <b>" . Auth::user()->name . "</b></span>";
        $print .= "<span> Printed Date: <b>" . date('Y-m-d') . "</b></span>";
        
        $print .= "</div>";

        $pdf = PDF::loadHTML($print);

        return $pdf->stream('payment_report_' . $pid . '.pdf');
    }
}