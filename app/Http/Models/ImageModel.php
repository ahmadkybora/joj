<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $fillable = ['imagetable_id', 'imagetable_type','path'];
    protected $table = "images";

    public function imagetable()
    {
        return $this->morphTo();
    }
}
