<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'contraseña'];

    public $timestamps = false;

    public function tramites(){
			return $this->hasMany('app/Tramite');
		}	
}
