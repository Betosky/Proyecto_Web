<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $table = 'encargado';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'mail'];

    public $timestamps = false;

    public function departamento(){
			return $this->hasOne('app/Departamento');
		}
}
