<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $primaryKey = 'product_code';

    public $incrementing = false;

    public function product(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'product_code');
    }

    use HasFactory;
}
