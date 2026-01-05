<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'images',
        'client_name',
        'is_featured',
    ];

    protected $casts = [
        'images' => 'array',
        'is_featured' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Auto-generate slug from title
    |--------------------------------------------------------------------------
    */
    protected static function booted()
    {
        static::creating(function ($portfolio) {
            if (empty($portfolio->slug)) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });

        static::updating(function ($portfolio) {
            if ($portfolio->isDirty('title')) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes (Optional)
    |--------------------------------------------------------------------------
    */

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
