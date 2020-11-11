<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['user_id','commentable_id','commentable_type'];
    public function imagetable()
    {
        return $this->morphTo();
    }
}
