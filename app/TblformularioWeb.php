<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TblformularioWeb extends Model
{
    //

    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tblformularioweb';
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tbldepartamento_id_vic', 'tblprovincia_id_vic', 'tbldistrito_id_vic', 'nombre1_vic', 'nombre2_vic', 'apellido1_vic', 'apellido2_vic', 'tbldocumento_id_vic', 'nro_doc_vic', 'edad_vic', 'hijos_vic', 'tbltipo_id_vic', 'telefono_vic', 'email_vic', 'direccion_vic', 'nombre1_agre', 'nombre2_agre', 'apellido1_agre', 'apellido2_agre', 'tbldocumento_id_agre', 'nro_doc_agre', 'sexo_agre', 'telefono_agre', 'direccion_agre', 'tbldepartamento_id_agre', 'tblprovincia_id_agre', 'tbldistrito_id_agre',  'tblparentesco_id', 'tblcomisaria_id', 'estado'];

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

    public function tblparentesco ()
    {
        return $this->belongsTo(Tblparentesco::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblcomisaria ()
    {
        return $this->belongsTo(Tblcomisaria::class);  // !importante - Para los modelos  =>  Category::class
    }

        public function tblviolencia ()
    {
        return $this->belongsTo(Tblviolencia::class);  // !importante - Para los modelos  =>  Category::class
    }

}