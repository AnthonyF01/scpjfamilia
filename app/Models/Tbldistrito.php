<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbldistrito extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbldistrito';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'tblprovincia_id' ];

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
        return $this->belongsTo(Tblprovincia::class);  // !importante - Para los modelos  =>  Category::class
    }
}
