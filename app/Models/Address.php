<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'locality_id'
    ];


    public function locality(): BelongsTo
    {
        return $this->belongsTo(Locality::class);
    }
    
    public function persons(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}
