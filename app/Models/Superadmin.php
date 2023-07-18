<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    protected $table = 'super_admin';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}