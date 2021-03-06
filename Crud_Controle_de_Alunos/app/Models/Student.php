<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    protected $guarded = [];
    protected $table = 'students';

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
