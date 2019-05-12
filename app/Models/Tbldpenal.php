<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbldpenal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbldpenal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'parent', 'nivel' ];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    public function getFields()
    {
        return $this->fillable;
    }

    //devuelve padre
    public function tbldpenal ()
    {
        return $this->belongsTo('App\Models\Tbldpenal','parent')->with('tbldpenal');
    }

    //devuelve hijos
    public function hijos()
    {
        return $this->hasMany('App\Models\Tbldpenal','parent')->with('hijos');
    }
}
