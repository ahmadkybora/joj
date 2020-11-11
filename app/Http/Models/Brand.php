<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Brand extends Model
{
    protected $fillable = ['user_id', 'creator', 'brand_name', 'brand_description'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function products_categories()
    {
        return $this->belongsToMany(ProductsCategories::class);
    }

    public function images()
    {
        return $this->morphMany(ImageModel::class, 'imagetable');
    }
}
