<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'encargado_id'];

    public $timestamps = false;

    public function encargado(){
			return $this->hasOne('app/Encargado');
		}
		public function documentos(){
			return $this->hasMany('app/Documento');
		}
}
