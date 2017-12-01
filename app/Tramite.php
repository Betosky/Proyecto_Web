<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $table = 'tramite';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'descripcion', 'administrador_id'];

    public $timestamps = false;

    public function administrador(){
			return $this->belongsTo('app/Administrador');
		}
}

