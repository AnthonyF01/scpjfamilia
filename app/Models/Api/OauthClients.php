<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class OauthClients extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oauth_clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  ];

    public function getFields()
    {
        return $this->fillable;
    }
}
