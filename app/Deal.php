<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'product_id',
        'title',
        'subtitle',
        'image_url',
        'image_path',
        'description',
        'likes'
    ];
}
