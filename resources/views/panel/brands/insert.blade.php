@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-success mt-3">
            <div class="card-header">
                <h3 class="card-title">ایجاد برند جدید</h3>
            </div>
            <div class="card-body">
                <form action="{{route('brands.store')}}" method="POST" id="formData" enctype="multipart/form-data">
                    @csrf
                    {{---------------------------------------------------}}
                    <div class="row">
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>عنوان برند :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="brand_name" name="brand_name"
                                           placeholder="لطفا برند را وارد کنید...">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>توضیحات برند:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                    </div>
                                    <textarea id="brand_description" name="brand_description" class="form-control"
                                              data-inputmask="'alias': 'ip'" data-mask="" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-12">
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
                            ثبت نام کارمند جدید
                        </button>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
        </div>
@stop

