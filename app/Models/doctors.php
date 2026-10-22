<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class doctors extends Model
{
    protected $fillable = [
        'specialty_id',
        'name',
        'crm',
        'phone',
        'work_start_time',
        'work_end_time',
        'slot_duaration',
        'is_active',
    ];

    public function specialty(): BelongsTo
    {
    return $this->belongsTo(Specialty::class);
    }

    public function appointment(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

}
