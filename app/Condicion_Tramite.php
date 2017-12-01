<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion_Tramite extends Model
{
    protected $table = 'condicion_tramite';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['condicion_id', 'tramite_id'];

    public $timestamps = false;

    public function documentos(){
    	return $this->hasMany('app/Documento');
    }

    public function Tramites(){
    	return $this->hasMany('app/Tramite');
    }
}
