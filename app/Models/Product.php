<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'sub_category_id',
        'title',
        'short_description',
        'full_description',
        'image',
        'cover_image',
        'divided_value',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function category()
    {
        // Access category through subcategory
        return $this->hasOneThrough(Category::class, SubCategory::class, 'id', 'id', 'sub_category_id', 'category_id');
    }

    // Features relation
    public function features()
    {
        return $this->hasMany(ProductFeature::class, 'product_id');
    }

    // Steps relation
    public function steps()
    {
        return $this->hasMany(ProductStep::class, 'product_id');
    }
}
