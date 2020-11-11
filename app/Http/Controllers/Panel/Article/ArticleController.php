<?php

namespace App\Http\Controllers\Panel\Article;

use App\Http\Controllers\Controller;
use App\Http\Models\Article;
use App\Http\Models\ImageModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ArticlesCategoriesRequest;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::paginate(10);
        return view('panel.articles.index', compact('articles'));
    }

    public function insert()
    {
        return view('panel.articles.insert');
    }

    public function store(ArticlesCategoriesRequest $request)
    {
        $articles = new Article();
        $articles->title = $request['title'];
        $articles->parent = $request['parent'];
        $articles->description = $request['description'];
        $articles->save();
        ///////////////////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/articles-categories', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $path)->fit(50, 50);
        $articles->images()->save($image);
        Alert::success('موفقیت آمیز بود!', 'دسته بندی مقالات با موفقیت ثبت شد!');

        return redirect()->route('panel.articles-categories.index');
    }

    public function show(Request $request)
    {
        $articles = Article::findOrFail($request->id);
        return view('panel.articles.show', compact('articles'));
    }

    public function edit(Request $request)
    {
        $articles = Article::findOrFail($request->id);
        return view('panel.articles.show', compact('articles'));
    }

    public function update(Request $request)
    {
        //
    }

    public function delete(Request $request)
    {
        $articles = Article::findOrFail($request->id);
        $articles->delete();
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت حذف شد!');
        return redirect()->route('articles.index');
    }
}
