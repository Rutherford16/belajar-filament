<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_number';
    protected $fillable = [
        'order_number',
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
        'customer_number',
    ];

    public $incrementing = false;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_number');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'order_number');
    }

    // public function getOrderNumber(){
    //     return $this->order_number
    // }
}
