<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ano',
        'nivel',
        'serie',
        'turno',
        'escola_id'
    ];

    public function Escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function Alunos()
    {
        return $this->belongsToMany(Alunos::class);        
    }
}
