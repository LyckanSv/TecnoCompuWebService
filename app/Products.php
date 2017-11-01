<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'model',
        'picture_url',
        'picture_path',
        'manufacturer_id',
        'category_id',
        'likes',
        'searches'
    ];
}
