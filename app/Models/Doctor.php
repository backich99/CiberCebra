<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'specialty', 'state', 'city', 'contact'])]
class Doctor extends Model
{
    public function recommendations(): HasMany
    {
        return $this->hasMany(Recommendation::class);
    }
}
