<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'DataEntrada',
        'DataSaida',
        'CafeDaManha',
        'Lazer',
        'Itinerarios',
        'Frigobar',
        'FormaDePagamento',
        'Cpf',
        'Email',
        'Endereco',
        'Cidade',
        'Cep',
        'Premium',
        'Luxo',
        'Master',
    ];


}
