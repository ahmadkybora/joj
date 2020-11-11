@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-success mt-3">
            <div class="card-header">
                <h3 class="card-title">ثبت دسته بندی جدید</h3>
            </div>
            <div class="card-body">
                <form action="{{route('categories.store')}}" method="POST" id="formData" enctype="multipart/form-data">
                    {{---------------------------------------------------}}
                    <div class="row">
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>عنوان دسته بندی :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="category_name" name="category_name"
                                           placeholder="لطفا عنوان را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>توضیحات :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <textarea type="text" class="form-control rtl"
                                           data-mask="" id="category_description" name="category_description"
                                              placeholder="لطفا توضیحات را وارد کنید..." rows="10"></textarea>
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
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm"
                                onclick="">
                            ایجاد دسته بندی
                        </button>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
        </div>
@stop

