<?php

namespace App\Models;
use App\Models\Invoice;
use App\Models\OrderUpdate;
use App\Models\User;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table='orders_made';
    public $primaryKey='id';
    protected $fillable = [
        'field1',
        'field2',
        'field3',
        'field4',
        'field5',
        'field6',
        'detail',
        'fileUpload',
        'user_id'
    ];
    public $incrementing='true';
    public $timestamps='false';

    public function orderUpdates()
{
    return $this->hasOne(OrderUpdate::class)->latest('created_at');
}
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function user()
    {
        //return $this->belongsTo(User::class);
        return $this->belongsTo(User::class, 'user_id');
    }
}
