<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'picture_url',
        'picture_path',
        'manufacturer_id',
        'likes',
        'searches'
    ];
}
