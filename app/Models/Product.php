<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    public static function generateSlug($title)
    {
        $product_slug = Str::slug($title);
        return $product_slug;
    }
}
