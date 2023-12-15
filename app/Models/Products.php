<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Products extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'products';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'product_name',
        'product_desc',
        'price',
        'availability',
        'image',
    ];

    public function productCategories()
    {
        return $this->belongsTo(ProductCategories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
