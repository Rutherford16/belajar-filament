<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $primaryKey = 'employee_number';

    public $incrementing = false;

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'office_code');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(self::class, 'report_to');
    }

    public function getFullnameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    use HasFactory;
}
