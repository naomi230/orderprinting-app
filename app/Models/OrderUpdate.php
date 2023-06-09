<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUpdate extends Model
{
    use HasFactory;
    protected $table = 'order_updates';

    protected $fillable = ['status', 'detail'];
    
    public function order()
{
    return $this->belongsTo(Order::class, 'order_id');
}

}
