<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = [
        'title',
        'description'
    ];

    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'is_active'
    ];

    protected $casts = [
        'price' => 'float',
        'is_active' => 'bool',
        'title' => 'array',
        'description' => 'array'
    ];

    protected $attributes = [
        'is_active' => false
    ];
}
