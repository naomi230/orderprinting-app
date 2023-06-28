<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = ['invoice_number', 'date', 'subtotal', 'vat', 'total'];

     // Define the relationship with order made
   
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

   

    // Calculate and return the total amount of the invoice
    public function calculateTotalAmount()
    {
        $total = $this->subtotal + $this->vat;
        return $total;
    }

    // Retrieve a specific invoice by ID
    public static function getInvoiceById($invoiceId)
    {
        return self::findOrFail($invoiceId);
    }

    // Retrieve all invoices
    public static function getAllInvoices()
    {
        return self::all();
    }
}
