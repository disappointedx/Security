<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metki extends Model
{
    use HasFactory;

        protected $fillable = [
        'id',
        'country',
        'status',
    ];
}
