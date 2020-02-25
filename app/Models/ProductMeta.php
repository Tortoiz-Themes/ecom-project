<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model
{
    protected $table= "productmetas";
    protected $fillable = ['attr_name', 'attr_value', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
