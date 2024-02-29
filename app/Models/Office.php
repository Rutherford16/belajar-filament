<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    protected $primaryKey = 'office_code';

    public $incrementing = false;

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    use HasFactory;
}
