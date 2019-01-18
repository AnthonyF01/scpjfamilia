<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DenunciaTbldenuncia extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'denuncia_tbldenuncia';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'denuncia_id', 'tbldenuncia_id' ];

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
        return $this->belongsTo(Denuncia::class);  // !importante - Para los modelos  =>  Denuncia::class
    }
}
