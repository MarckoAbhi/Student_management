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

        $print = "<div style='margin:20px; padding:20px; font-family: Arial, sans-serif;'>";
        $print .= "<h1 style='text-align:center'>Payment Report</h1>";
        $print .= "<hr/>";
        $print .= "<p><strong>Receipt No:</strong> " . $pid . "</p>";
        $print .= "<p><strong>Payment Date:</strong> " . $payment->paid_date . "</p>";
        $print .= "<p><strong>Enrollment No:</strong> " . $payment->enrollment->enroll_no . "</p>";
        $print .= "<p><strong>Student Name:</strong> " . $payment->enrollment->student->name . "</p>";

        $print .= "<hr/>";
        $print .= "<table style='width:100%; border: 1px solid #ddd; border-collapse: collapse;'>";
        $print .= "<tr style='background-color: #f4f4f4;'>";
        $print .= "<th style='padding: 8px; text-align: left;'>Description</th>";
        $print .= "<th style='padding: 8px; text-align: right;'>Amount</th>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td style='padding: 8px;'>" . $payment->enrollment->batch->name . "</td>";
        $print .= "<td style='padding: 8px; text-align: right;'>" . number_format($payment->amount, 2) . "</td>";
        $print .= "</tr>";
        
        $print .= "</table>";
        $print .= "<hr/>";

        // $print .= "<p><strong>Printed by:</strong> " . Auth::user()->name . "</p>";
        $print .= "<p><strong>Printed Date:</strong> " . date('Y-m-d') . "</p>";
        
        $print .= "</div>";

        $pdf = PDF::loadHTML($print);

        return $pdf->stream('payment_report_' . $pid . '.pdf');
    }
}