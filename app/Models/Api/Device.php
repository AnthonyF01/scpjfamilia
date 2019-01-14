<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'device';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'user_id', 'client_id', 'token_device' ];

    public function getFields()
    {
        return $this->fillable;
    }
}
