<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Denuncia extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'denuncia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'tblcomisaria_id','oficio','fdenuncia','fformalizacion','expediente','calificacion','hora','faudiencia','remitido','oficioremitido','fremision','ministerio','tblinstancia_id','asistencialegal','psicologia','remitidod','oficioremitidod','fremisiond','remitidoj','oficioremitidoj','fremisionj','observacion','tblmodulo_id','medida_file','registro_file' ];

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

    public function getFdenunciaAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function getFformalizacionAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function getFaudienciaAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function getFremisionAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function getFremisiondAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function getFremisionjAttribute($value)
    {
        return (isset($value) && !empty($value)) ? date('d/m/Y',strtotime($value)) : '';
    }

    public function tblcomisaria ()
    {
        return $this->belongsTo(Tblcomisaria::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblinstancia ()
    {
        return $this->belongsTo(Tblinstancia::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tblmodulo ()
    {
        return $this->belongsTo(Tblmodulo::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function victimas ()
    {
        // por convencion no genera problema pero se agrega el nombre de la tabla pivot por pura simetria
<<<<<<< 8a05ad328ac470a8ee0259027f15ac45c226c813
        return $this->belongsToMany(Victima::class, 'denuncia_victima')->where('deleted_at','!=',NULL);
=======
        return $this->belongsToMany(Victima::class, 'denuncia_victima')->whereNull('denuncia_victima.deleted_at'); 
>>>>>>> bbb
    }

    public function agresores ()
    {
        // la convencion de nombramiento de tablas debe ser en orden albafetico => la tabla pivot debio llamarse:
        // "agresor_denuncia" pero se llama denuncia_agresor por lo que se debe indicar el nombre de la tabla pivot
<<<<<<< 8a05ad328ac470a8ee0259027f15ac45c226c813
       return $this->belongsToMany(Agresor::class, 'denuncia_agresor');
=======
       return $this->belongsToMany(Agresor::class, 'denuncia_agresor')->whereNull('denuncia_agresor.deleted_at'); 
>>>>>>> bbb
    }

    public function denunciaagresores ()
    {
        return $this->hasMany(DenunciaAgresor::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function denunciavictimas ()
    {
        return $this->hasMany(DenunciaVictima::class);  // !importante - Para los modelos  =>  Category::class
    }

    public function tbldenuncias()
    {
        return $this->belongsToMany(Tbldenuncia::class);
    }

}
