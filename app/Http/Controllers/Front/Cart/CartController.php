<?php

namespace App\Http\Controllers\Front\Cart;

use App\Http\Controllers\Controller;
use App\Http\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $product = Product::find($request->id);
        if (isset($_COOKIE['user_ip'])) {
            $ip = $_COOKIE['user_ip'];
        } else {
            $ip = $request->ip();
            setcookie('user_ip', $ip, time() + 1206900);
        }
        $cart = new Cart();
        $cart->user_ip = $ip;
        $cart->product_id = $product->id;
        $cart->user_system_info = $request->server('HTTP_USER_AGENT');
        $cart->quantity = 1;
        $cart->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->check_product();
        return view('front.account.cart-show', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
