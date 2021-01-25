<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    //Asignar clave primaria en este caso 'iso' y que no sea incrementable, en resumen sustituye al id
    protected $primaryKey = 'iso';
    public $incrementing = false;

    protected $fillable = [
        //codigo de monea usd, eur etc
        'iso'
    ];
}
