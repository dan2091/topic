<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    public $primaryKey = 'id';
    public $timestamps = true;
}
