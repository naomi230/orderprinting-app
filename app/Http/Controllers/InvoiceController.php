<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;


class InvoiceController extends Controller
{
    public function showInvoice(Request $request, $invoiceId)
    {
        // Retrieve the invoice data based on the provided $invoiceId
        $invoiceData = Invoice::getInvoiceById($invoiceId);


        // Pass the invoice data to the invoice template
        $data = [
            'invoice' => $invoiceData,
            'date' => $invoiceData->date,
        ];

        // Render the invoice HTML using Laravel's view
        $html = view('invoice', $data)->render();

        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load the HTML into Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Get the generated PDF content
        $pdfContent = $dompdf->output();

        // Set the response headers for PDF download
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="invoice.pdf"',
        ];

        // Return the PDF file as a response
        return response($pdfContent, 200, $headers);
    }
}
