<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Victima extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'victima';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'nombre1', 'nombre2', 'nombre3', 'apellido', 'apellido1', 'apellido2', 'tbldocumento_id', 'nro_doc', 'edad', 'hijos', 'tbltipo_id', 'tbldepartamento_id', 'tblprovincia_id', 'tbldistrito_id', 'telefono', 'email', 'direccion' ];

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

    public function tblprovincia ()
    {
        return $this->belongsTo(Tblprovincia::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldistrito ()
    {
        return $this->belongsTo(Tbldistrito::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldocumento ()
    {
        return $this->belongsTo(Tbldocumento::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbltipo ()
    {
        return $this->belongsTo(Tbltipo::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function denuncias () 
    {   
        // por convencion no genera problema pero se agrega el nombre de la tabla pivot por pura simetria
        return $this->belongsToMany(Denuncia::class, 'denuncia_victima'); 
    }

    public function denunciavictimas ()
    {
        return $this->hasMany(DenunciaVictima::class);  // !importante - Para los modelos  =>  Category::class
    }
}
