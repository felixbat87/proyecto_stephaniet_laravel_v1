<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muci2 extends Model
{
    use HasFactory;

    protected $table="muci2";
    protected $primaryKey="CODIGO_USUARIO";
    protected $fillable=array('NOMBRE','APELLIDO','NOMBRE_USUARIO','CORREO','DIRECCION','CARGO','PASSWORD');
}
