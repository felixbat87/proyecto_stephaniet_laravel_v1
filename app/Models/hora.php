<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hora extends Model
{
    use HasFactory;
    protected $table="hora";
    protected $primaryKey="ID_MARCACION";
    protected $fillable=array('USUARIO_ID','FECHA','ENTRADA','SALIDA','HORAS_TRABAJADAS','HORAS_EXTRAS','COMENTARIOs');
}
