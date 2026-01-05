<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrintFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'file_path',
        'file_type',
        'notes',
    ];

    protected $casts = [
        'file_path' => 'array',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
