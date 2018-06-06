<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $hidden = ['created_at','updated_at','deleted_at'];
    protected $fillable = ['title','description'];
    protected $appends = ['test']; /*aquellos atributos que no pertenecen a la tabla*/

    public function getTitleAttribute($value){
       return ucfirst($value); //Pone la primera letra en mayusculas.
    }

    public function geTestAttribute(){
        return "$this->title $this->description";
    }

    public function user(){
        //$this->belongsTo(User::class, '','','');
        $this->belongsTo(User::class);
    }

}
