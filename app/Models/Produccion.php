<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Produccion extends Model
{
    protected $table = 'produccion';
    protected $primaryKey = 'id_produccion';
    protected $fillable = ['nom_producto','fec_produccion', 'cant_produccion'];
}