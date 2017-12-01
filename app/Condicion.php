<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condicion';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'descripcion']; 

    public $timestamps = false;

}
