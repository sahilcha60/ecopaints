<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    // Auto-generate slug
    protected static function booted()
    {
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

    // Relation
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Scope published blogs
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
