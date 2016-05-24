<?php

namespace RTLer\Oauth2\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class RefreshTokenModel extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_refresh_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
        'access_token_id',
        'expire_time'
    ];
}