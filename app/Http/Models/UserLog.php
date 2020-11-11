<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable=['user_id','username','ip','system_info','last_login','last_logout'];
}
