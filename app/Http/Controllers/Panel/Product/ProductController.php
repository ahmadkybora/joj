<?php

namespace App\Http\Controllers\Panel\Product;

use App\Http\Controllers\Controller;
use App\Http\Models\Product;
use App\Http\Models\Brand;
use App\Http\Models\ImageModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProductRequest;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('panel.products.index', compact('products'));
    }

    public function insert()
    {
        $brands = Brand::all();
        return view('panel.products.insert', compact('brands'));
    }

    public function store(ProductRequest $request)
    {
        $products = new Product();
        $products->user_id = 1;
        $products->brand_id = $request['brand'];
        $products->creator = "احمد";
        $products->product_name = $request['product_name'];
        $products->product_description = $request['product_description'];
        $products->product_price = $request['product_price'];
        $products->product_color = $request['product_color'];
        $products->product_code = $request['product_code'];
        $products->save();
        ///////////////////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/products', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $path)->fit(50, 50);
        $products->images()->save($image);
        Alert::success('موفقیت آمیز بود!', 'محصول با موفقیت ثبت شد!');

        return redirect()->route('products.index');
    }

    public function show(Request $request)
    {
        $products = Product::findOrFail($request->id);
        return view('panel.products.show', compact('products'));
    }

    public function edit(Request $request)
    {
        $products = Product::findOrFail($request->id);
        return view('panel.products.edit', compact('products'));
    }

    public function update(Request $request)
    {
        //
    }

    public function delete(Request $request)
    {
        $products = Product::findOrFail($request->id);
        $products->delete();
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت حذف شد!');
        return redirect()->route('products.index');
    }
}
