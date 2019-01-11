<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'user_id', 'lat', 'lng', 'acc', 'title', 'body', 'tbldepartamento_id', 'tblmodulo_id' ];

    public function getFields()
    {
        return $this->fillable;
    }
}
