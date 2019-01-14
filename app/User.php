<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, ShinobiTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nombre', 'direccion', 'fono', 'imagen', 'dni', 'fchnac', 'tbldepartamento_id', 'tblmodulo_id', 'acceso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFields()
    {
        return $this->fillable;
    }

    public function getFchnacAttribute($value)
    {
        return date('d/m/Y',strtotime($value));
    }

    public function setFchnacFormatAttribute($value)
    {
        $this->attributes['fchnac'] = date('Y-m-d',strtotime(str_replace('/', '-', $value )));
    }

    public function roles()
    {
        return $this->belongsToMany('Caffeinated\Shinobi\Models\Role');
    }

    public function tblmodulo ()
    {
        return $this->belongsTo(Models\Tblmodulo::class);  // !importante - Para los modelos  =>  Category::class
    }

}
