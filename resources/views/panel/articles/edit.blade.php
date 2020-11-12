@extends('layouts.panel.content')
@section('title', 'edit article')
@section('content')
    <div class="col-12">
        <div class="card card-success mt-3">
            <div class="card-header">
                <h3 class="card-title"> ویرایش مقاله {{$article->articleTitle}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('articles.update', $article->id)}}" method="POST" id="formData"
                      enctype="multipart/form-data">
                    {{---------------------------------------------------}}
                    <div class="row">
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>دسته بندی :</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option value="">لطفا دسته بندی را انتخاب کنید :</option>
                                        <option value="0">آقا</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>عنوان مقاله :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="articleTitle" name="articleTitle"
                                           value="{{ $article->articleTitle }}"
                                           placeholder="لطفا عنوان مقاله را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>انتخاب عکس:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-image"></i></span>
                                    </div>
                                    <input type="file" class="form-control"
                                           id="image" name="image" onchange=""></div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>ویرایش متن مقاله : </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-image"></i></span>
                                    </div>
                                    <textarea class="form-control" id="articleDescription"
                                              name="articleDescription" rows="5">{{ $article->articleDescription }}</textarea>
                                </div>
                            </div>
                            {{---------------------------------------------------}}
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-sm"
                                    onclick="">
                                ویرایش مقاله جدید
                            </button>
                        </div>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
            {{--------------------------------------------------------------------}}
            <div class="card card-success mt-3">
                <div class="card-header">
                    <h3 class="card-title"> لطفا وضعیت مقاله {{$article->articleTitle}} را مشخص کنید </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('articles.update', $article->id)}}" method="POST" id="formData"
                          enctype="multipart/form-data">
                        @csrf
                        {{---------------------------------------------------}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="radio" value="">تایید شده</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="radio" value="">رد شده</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-success btn-sm"
                                            onclick="">
                                        ثبت کنید
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                    </form>
                </div>
            </div>
            {{--------------------------------------------------------------------}}
        </div>
        </div>
@stop

