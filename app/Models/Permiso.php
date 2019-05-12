<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['depende_de','nivel','name', 'slug', 'description'];

    public function getFields()
    {
        return $this->fillable;
    }

    //devuelve los hijos de los permisos
    public function permisos()
    {
        return $this->hasMany('App\Models\Permiso','depende_de')->with('permisos');
    }

    //devuelve el padre del permiso
    public function padre()
    {
        return $this->belongsTo('App\Models\Permiso','depende_de');
    }
}
