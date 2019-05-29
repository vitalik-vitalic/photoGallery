<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    public $fillable = [
        'id',
        'name',
        'body',
        'user_id',
        'catalog_id',
        'picture',
        'status'
    ];
}
