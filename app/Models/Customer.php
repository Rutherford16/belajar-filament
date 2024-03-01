<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $primaryKey = 'customer_number';

    public $incrementing = false;

    protected $fillable = [
        'customer_number',
    ];

    public function customer(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function customerIni(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sales_rep_employee_number');
    }

    public function getFullnameCustomerAttribute()
    {
        return $this->contact_first_name . ' ' . $this->contact_last_name;
    }

    use HasFactory;
}
