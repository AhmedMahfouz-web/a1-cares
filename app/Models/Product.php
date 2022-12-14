<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'page-title',
        'photo',
        'description',
        'price',
    ];

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }
}
