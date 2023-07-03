<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Additional properties, relationships, and methods specific to Admin role
}
