<?php

namespace App\Http\Controllers\Panel\Brand;

use App\Http\Controllers\Controller;
use App\Http\Models\Brand;
use App\Http\Models\ImageModel;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{

    public function index()
    {
        $brands=Brand::paginate(10);
        return view('panel.brands.index',compact('brands'));
    }

    public function insert()
    {
        return view('panel.brands.insert');
    }

    public function store(BrandRequest $request)
    {
        $brand = new Brand();
        $brand->user_id = 1;
        $brand->creator = "ahmad";
        $brand->brand_name = $request['brand_name'];
        $brand->brand_description = $request['brand_description'];
        $brand->save();
        //////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/brands', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $path)->fit(50, 50);
        $brand->images()->save($image);

        Alert::success('موفقیت آمیز بود!', 'برند با موفقیت ثبت شد!');

        return redirect()->route('brands.index');
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
        //
    }

    public function update(Request $request, Brand $brand)
    {
        //
    }

    public function delete(Brand $brand)
    {
        //
    }

    public function archive(Brand $brand)
    {
        //
    }
}
