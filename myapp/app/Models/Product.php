<?php

namespace App\Models;

use App\Policies\ProductPolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    protected $guarded = ['id'];
    use HasFactory;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function mainCategory(): BelongsTo
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function images(): HasMany 
    {
        return $this->hasMany(Image::class)->orderBy('id');
    }
}
