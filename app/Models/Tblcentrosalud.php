<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tblcentrosalud extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblcentrosalud';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'tblmodulo_id', 'tbldepartamento_id' ];

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

    public function tblmodulo ()
    {
        return $this->belongsTo(Tblmodulo::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldepartamento ()
    {
        return $this->belongsTo(Tbldepartamento::class);  // !importante - Para los modelos  =>  Category::class
    }

}
