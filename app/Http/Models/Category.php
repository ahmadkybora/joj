<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['user_id', 'parent','creator','category_name', 'category_description'];

    public function images()
    {
        return $this->morphMany(ImageModel::class, 'imagetable');
    }

    public function parent(){}
    public function child()
    {
        return $this->hasMany(Category::class,'parent','id');
    }

    public function articles()
    {
        return $this->morphedByMany(Article::class, 'categorizable');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, 'categorizable');
    }



}
