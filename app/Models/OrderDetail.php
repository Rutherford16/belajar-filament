<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    // protected $primaryKey = 'order_number';

    // public $incrementing = false;

    public function orderDetail(): BelongsTo
    {
        return $this->belongsTo(Order::class, ['order_number', 'product_code']);
    }

    use HasFactory;
}
