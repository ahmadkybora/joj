@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-success mt-3">
            <div class="card-header">
                <h3 class="card-title">ایجاد محصول جدید</h3>
            </div>
            <div class="card-body">
                <form action="{{route('products.store')}}" method="POST" id="formData" enctype="multipart/form-data">
                    @csrf
                    {{---------------------------------------------------}}
                    <div class="row">
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>نام محصول :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="product_name" name="product_name"
                                           placeholder="لطفا نام محصول را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>قیمت محصول :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="number" class="form-control rtl"
                                           data-mask="" id="product_price" name="product_price"
                                           placeholder="لطفا قیمت محصول را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>رنگ محصول :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="product_color" name="product_color"
                                           placeholder="لطفا رنگ محصول را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>کد محصول :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="number" class="form-control rtl"
                                           data-mask="" id="product_code" name="product_code"
                                           placeholder="لطفا کد محصول را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>برند محصولات :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <select class="form-control" name="brand">
                                        <option value="">لطفا برند محصولات را انتخاب کنید :</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>دسته بندی محصولات :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <select class="form-control" name="products_categories">
                                        <option value="">لطفا دسته بندی محصولات را انتخاب کنید :</option>
                                        <option
                                            value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--------------------------------------------------------------------}}
                    </div>
                    {{---------------------------------------------------}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>توضیحات اجمالی :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-home"></i></span>
                                </div>
                                <textarea type="number" id="product_description" name="product_description"
                                          class="form-control rtl" rows="10"></textarea>
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
                    <div class="form-group">
                        <button class="btn btn-success btn-sm"
                                onclick="">
                            ثبت نام محصول جدید
                        </button>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
        </div>
@stop

