<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use App\Http\Models\Product;
use Illuminate\Support\Facades\Request;
use App\Http\Models\Cart;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $cart= new Cart();
        $cart->check_product('11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36');
        /*dd($cart);*/
        $products=Product::paginate(10);
        return view('front.home.home',compact('products','cart'));
    }

    public function singleProduct($id){
        $product=Product::find($id);
        return view('front.home.single-product',compact('product'));
    }
}
