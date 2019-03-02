<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documento';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'user_id', 'numero', 'fecha', 'tipo', 'file', 'tblmodulo_id', 'created_at', 'updated_at' ];

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

    public function getFechaAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

}
