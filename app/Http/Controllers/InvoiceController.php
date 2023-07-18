<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Dompdf\Dompdf;
use App\Models\Order;
use App\Models\User;

class InvoiceController extends Controller
{
    public function generateInvoice($id)
    {
        $invoice = Invoice::find($id);

        $order = Order::find($invoice->id);

        $prices = [
            'Printing Category' => 10.99, // Set the price for 'Printing Category'
             'Material'=>500,
             'Number of copies'=>100,
            // Add prices for other items
        ];
        
        $fieldMappings = [
            'field1' => 'Printing Category',
            'field2' => 'Printing Type',
            'field3' => 'Material',
            'field4' => 'Weight',
            'field5' => 'Size',
            'field6' => 'Number of copies',
 

        ];
        $items = [];
    foreach ($fieldMappings as $column => $display) {
        $items[$display] = $order->$column;
    }
       
        $pdf = new Dompdf();
        //$pdf->loadView('invoices.show', compact('invoice'));
        $view = view('invoice', compact('invoice','order','items','prices'))->render();
        $pdf->loadHtml($view);
    
        // (Optional) Adjust the PDF settings
        $pdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $pdf->render();

        $pdf->stream('invoice.pdf');
    }
}
