<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento_Tramite extends Model
{
    protected $table = 'documento_tramite';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['documento_id', 'tramite_id'];

    public $timestamps = false;

    public function documentos(){
    	return $this->hasMany('app/Documento');
    }

    public function Tramites(){
    	return $this->hasMany('app/Tramite');
    }
}
