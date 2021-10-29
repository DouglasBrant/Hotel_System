<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'funcao',
        'turno',
        'alimentacao',
        'salario',
        'transporte',
        'refeicao',
        'cidade',
        'endereço',
        'cpf',
        'rg',
        'telefone',
        'nome',
        'passaword',
        'email',
    ];
}
