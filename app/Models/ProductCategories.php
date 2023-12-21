<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'product_categories';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'cat_name'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
