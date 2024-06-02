<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qandans extends Model
{
    use HasFactory;

    // protected $table = 'contenido';
    protected $primaryKey = 'id_qandans';

    // protected $fillable = ['Titulo', 'Que_es'];

    /* por defecto se envian los siguientes campos en eloquoent  updated_at  y created_at*/
    /* esto evita que se envien esos campos */
    // public $timestamps = false;

}
