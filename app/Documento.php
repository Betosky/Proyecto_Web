<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'valor', 'descripcion', 'departamento_id'];

    public $timestamps = false;

}
