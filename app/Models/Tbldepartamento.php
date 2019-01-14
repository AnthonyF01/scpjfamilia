<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbldepartamento extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbldepartamento';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre' ];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    // protected $dateFormat = 'Ymd h:i:s';

    public function getFields()
    {
        return $this->fillable;
    }

    public function tblprovincia ()
    {
        return $this->hasMany(Tblprovincia::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblmodulo ()
    {
        return $this->hasMany(Tblmodulo::class);  // !importante - Para los modelos  =>  Category::class
    }
}
