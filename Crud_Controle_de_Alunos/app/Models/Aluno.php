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
        'sexo'
    ];

    public function Escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function Turmas()
    {
        return $this->belongsToMany(Turma::class);        
    }
}
