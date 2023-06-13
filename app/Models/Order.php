<?php

namespace App\Models;

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
        'fileUpload'
    ];
    public $incrementing='true';
    public $timestamps='false';
}
