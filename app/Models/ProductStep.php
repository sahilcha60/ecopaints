<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStep extends Model
{
    protected $table = 'product_steps';

    protected $fillable = [
        'product_id',
        'title',
        'step',
        'product_list', // reverted back
        'coat',
    ];

    /**
     * Relationship: Step belongs to Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
