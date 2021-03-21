<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
        return $this->hasMany('App\ProductImage'); // один ко многим
    }

    public function category()
    {
        return $this->belongsTo('App\Category'); // многие к одному
    }
}
