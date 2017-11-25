<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $table = 'tramite';

    protected $primaryKey = 'id';

    protected $fillable = ['documento_id', 'nombre', 'descripcion', 'condicion_id','administrador_id'];

    public $timestamps = false;

    public function administrador(){
			return $this->belongsTo('app/Administrador');
		}

		public function condiciones(){
			return $this->hasMany('app/Condicion');
		}

		public function documentos(){
			return $this->hasMany('app/Documento')
		}
}

