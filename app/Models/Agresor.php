<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agresor extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agresor';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'nombre', 'apellido', 'nombre1', 'nombre2', 'nombre3', 'apellido', 'apellido1', 'apellido2', 'tbldocumento_id', 'nro_doc', 'sexo', 'tbldepartamento_id', 'tblprovincia_id', 'tbldistrito_id', 'telefono', 'email', 'direccion' ];

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

    public function denuncias () 
    { 
        // la convencion de nombramiento de tablas debe ser en orden albafetico => la tabla pivot debio llamarse:
        // agresor_denuncia pero se llama denuncia_agresor por lo que se debe indicar el nombre de la tabla pivot
        return $this->belongsToMany(Denuncia::class, 'denuncia_agresor', 'agresor_id', 'denuncia_id'); 
    }

    public function denunciaagresores ()
    {
        return $this->hasMany(DenunciaAgresor::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblparentescos () 
    {
        return $this->belongsToMany(Tblparentesco::class, 'denuncia_agresor', 'agresor_id', 'tblparentesco_id'); 
    }
}
