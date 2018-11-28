<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblprovincia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblprovincia';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'tbldepartamento_id' ];

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

    public function tbldepartamento ()
    {
        return $this->belongsTo(Tbldepartamento::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldistrito ()
    {
        return $this->hasMany(Tbldistrito::class);  // !importante - Para los modelos  =>  Category::class
    }
}
