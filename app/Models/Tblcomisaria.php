<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tblcomisaria extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblcomisaria';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'latitud', 'longitud', 'tipo_int', 'tblmodulo_id', 'tbldepartamento_id' ];

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // protected $dateFormat = 'Ymd h:i:s';

    public function getFields()
    {
        return $this->fillable;
    }

    public function tblmodulo ()
    {
        return $this->belongsTo(Tblmodulo::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldepartamento ()
    {
        return $this->belongsTo(Tbldepartamento::class);  // !importante - Para los modelos  =>  Category::class
    }

}
