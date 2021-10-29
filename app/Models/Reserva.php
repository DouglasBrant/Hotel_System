<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_entrada',
        'data_saida',
        'cafe_da_manha',
        'lazer',
        'itinerarios',
        'frigobar',
        'forma_de_pagamento',
    ];


}
