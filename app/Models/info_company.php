<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_company extends Model
{
    use HasFactory;

    protected $table = 'info_company';
    // protected $primaryKey = 'id_company';

    // protected $fillable = ['Titulo', 'Que_es'];

    /* por defecto se envian los siguientes campos en eloquoent  updated_at  y created_at*/
    /* esto evita que se envien esos campos */
    // public $timestamps = false;
}
