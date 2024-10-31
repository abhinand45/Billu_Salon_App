<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'password', 'phone'];
}


// php artisan config:clear
// php artisan config:cache
