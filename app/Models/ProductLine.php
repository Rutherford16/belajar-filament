<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $primaryKey = 'product_line';

    public $incrementing = false;

    use HasFactory;
}
