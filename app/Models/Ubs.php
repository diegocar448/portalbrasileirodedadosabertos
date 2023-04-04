<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'bairro',
        'cep',
        'cidade',
        'complemento',
        'data_atualizacao',
        'endereco',
        'georef_location',
        'ibge',
        'id_equipamento',
        'nome',
        'referencia',
        'responsavel',
        'telefone',
        'uf',
    ];


}
