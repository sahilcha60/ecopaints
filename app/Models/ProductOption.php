<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size',
        'type',
        'color',
        'sku',
        'price_modifier',
    ];

    protected $casts = [
        'price_modifier' => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | Auto-generate SKU (DCP001, DCP002...)
    |--------------------------------------------------------------------------
    */
    protected static function booted()
    {
        static::creating(function ($option) {
            if (empty($option->sku)) {
                $option->sku = self::generateSku();
            }
        });
    }

    private static function generateSku(): string
    {
        $lastId = self::max('id') + 1;
        return 'DCP' . str_pad($lastId, 3, '0', STR_PAD_LEFT);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
