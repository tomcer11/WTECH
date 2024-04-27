<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adress extends Model
{
    use HasFactory;

    public function orderSpecification(): HasMany
    {
        return $this->hasMany(OrderSpecification::class); 
    }

}
