<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use HasMediaTrait, SoftDeletes;
    protected $fillable = [
        'category_id',
        'brand_id',
        'title',
        'slug',
        'description',
        'unit',
        'price',
        'sales_price',
        'ratings'
    ];
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function metas()
    {
        return $this->hasMany('App\Models\ProductMeta');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(185)
            ->height(120)
            ->sharpen(10);
    }
}
