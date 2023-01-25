<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class tarea extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='tareas';
    protected $fillable=[
        'nombre',
        'descripcion',
        'finalizada',
        'fechalimite',
        'urgencia',
    ];

    protected $dates=['fechalimite'];

    public const URGENCIAS=['Baja','Normal','Alta'];

    public function urgencia(){
        return self::URGENCIAS[$this->urgencia];
    }

    public function estaFinalizada(){
        return $this->finalizada==1?'Si':'No';
    }
}
