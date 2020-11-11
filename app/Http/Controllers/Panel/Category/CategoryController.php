<?php

namespace App\Http\Controllers\Panel\Category;

use App\Http\Controllers\Controller;
use App\Http\Models\ArticlesCategories;
use App\Http\Models\ImageModel;
use App\Http\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CategoryRequest;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
        return view('panel.categories.index', compact('categories'));
    }

    public function insert()
    {
        return view('panel.categories.insert');
    }

    public function store(CategoryRequest $request)
    {
        $articles_categories = new ArticlesCategories();
        $articles_categories->title = $request['title'];
        $articles_categories->parent = $request['parent'];
        $articles_categories->description = $request['description'];
        $articles_categories->save();
        ///////////////////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/articles-categories', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $image)->fit(50, 50);
        $articles_categories->images()->save($image);
        Alert::success('موفقیت آمیز بود!', 'دسته بندی مقالات با موفقیت ثبت شد!');

        return redirect()->route('panel.articles-categories.index');
    }

    public function show(Request $request)
    {
        $categories = Category::findOrFail($request->id);
        return view('panel.categories.show', compact('categories'));
    }

    public function edit(Request $request)
    {
        $categories = Category::findOrFail($request->id);
        return view('panel.categories.show', compact('categories'));
    }

    public function update(Request $request)
    {
        //
    }

    public function delete(Request $request)
    {
        $categories = Category::findOrFail($request->id);
        $categories->delete();
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت حذف شد!');
        return redirect()->route('categories.index');
    }
}
