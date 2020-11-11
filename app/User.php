<?php

namespace App;

use App\Http\Models\Article;
use App\Http\Models\ArticlesCategories;
use App\Http\Models\ImageModel;
use App\Http\Models\Comment;
use App\Http\Models\Permission;
use App\Http\Models\ProductsCategories;
use App\Http\Models\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_id', 'type', 'sex', 'first_name', 'last_name', 'username', 'email', 'home_phone', 'mobile', 'password', 'api_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function images()
    {
        return $this->morphMany(ImageModel::class, 'imagetable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }


    public function products()
    {
        return $this->belongsTo(Article::class);
    }


    public function isAdmin()
    {
        $this->type = 0;
    }

}
//soltane soltane hamash dore hame kordane
