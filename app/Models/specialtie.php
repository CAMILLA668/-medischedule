<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class specialties extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function doctor(): HasMany
    {
        return $this->hasMany(Doctor::class);

    }
}
