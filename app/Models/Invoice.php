<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [ 'total',];

     // Define the relationship with order made
   
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

   
    // Calculate and return the total amount of the invoice
    public function calculateTotalAmount()
    {
        $total = $this->order()->sum('amount');
        //$total = $this->order->amount;
        return $total;
    }

   
   
}
