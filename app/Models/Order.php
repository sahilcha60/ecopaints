<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'status',
        'total_price',
        'payment_status',
        'note',
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | Auto-generate Order Number (ORD0001)
    |--------------------------------------------------------------------------
    */
    protected static function booted()
    {
        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = self::generateOrderNumber();
            }
        });
    }

    private static function generateOrderNumber(): string
    {
        $lastId = self::max('id') + 1;
        return 'ORD' . str_pad($lastId, 5, '0', STR_PAD_LEFT);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function printFiles()
    {
        return $this->hasMany(PrintFile::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes (Optional)
    |--------------------------------------------------------------------------
    */

    public function scopePaid($query)
    {
        return $query->where('payment_status', 'paid');
    }
}
