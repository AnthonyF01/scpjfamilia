<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DenunciaAgresor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'denuncia_agresor';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'denuncia_id', 'agresor_id', 'tblparentesco_id' ];

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

    public function denuncias ()
    {
        return $this->belongsTo(Denuncia::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblprovincia ()
    {
        return $this->agresor(Agresor::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblparentesco ()
    {
        return $this->belongsTo(Tblparentesco::class);  // !importante - Para los modelos  =>  Category::class
    }

}
