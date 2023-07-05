<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Dompdf\Dompdf;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function generateInvoice($id)
    {
        $invoice = Invoice::find($id);

       
        $pdf = new Dompdf();
        //$pdf->loadView('invoices.show', compact('invoice'));
        $view = view('invoice', compact('invoice'))->render();
        $pdf->loadHtml($view);
    
        // (Optional) Adjust the PDF settings
        $pdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $pdf->render();

        $pdf->stream('invoice.pdf');
    }
}
