<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascota';
    protected $fillable = [
        'nombre',
        'raza',
        'color',
        'persona_id',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
