<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    protected $fillable = ['user_ip', 'product_id', 'user_system_info', 'quantity',];

    public function check_product($product_id, $user_ip, $user_system_info)
    {
        return DB::table('carts')
            ->select('*')
            ->where('product_id', '=', $product_id)
            ->where('user_ip', '=', $user_ip)
            ->where('user_system_info', '=', $user_system_info)
            ->first();
    }
}
