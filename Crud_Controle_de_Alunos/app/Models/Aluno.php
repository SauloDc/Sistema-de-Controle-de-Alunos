<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'dataNascimento',
        'sexo',
        'escola_id',
        'turma_id' 
    ];

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
