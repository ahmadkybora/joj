@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-success mt-3">
            <div class="card-header">
                <h3 class="card-title">ویرایش کاربر</h3>
            </div>
            <div class="card-body">
                <form action="{{route('users.update',$user->id)}}" method="POST" id="formData"
                      enctype="multipart/form-data">
                    @csrf
                    {{---------------------------------------------------}}
                    <div class="row">
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>جنسیت :</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option value="">لطفا جنسیت را انتخاب کنید :</option>
                                        <option value="0">آقا</option>
                                        <option value="1">خانم</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>نام :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="first_name" name="first_name"
                                           placeholder="لطفا نام را وارد کنید..." value="{{$user->first_name}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>نام خانوادگی :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="last_name" name="last_name"
                                           placeholder="لطفا نام خانوادگی را وارد کنید..." value="{{$user->last_name}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>نام کاربری :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="username" name="username"
                                           placeholder="لطفا نام کاربری را وارد کنید..." value="{{$user->username}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>ایمیل :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-users"></i></span>
                                    </div>
                                    <input type="text" class="form-control rtl"
                                           data-mask="" id="email" name="email"
                                           placeholder="لطفا ایمیل را وارد کنید..." value="{{$user->email}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>شماره تلفن منزل :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                                    </div>
                                    <input type="number" id="home_phone" name="home_phone" class="form-control rtl"
                                           data-inputmask="&quot;mask&quot;: &quot;99-9999-9999&quot;" data-mask=""
                                           value="{{$user->home_phone}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>شماره همراه:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="number" id="mobile" name="mobile" class="form-control"
                                           data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']"
                                           data-mask="" value="{{$user->mobile}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>رمز عبور:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-control"
                                           data-inputmask="'alias': 'ip'" data-mask="" value="{{$user->password}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>تکرار رمز عبور:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                    </div>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                           class="form-control" data-inputmask="'alias': 'ip'" data-mask="" value="{{$user->password}}">
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------------}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>انتخاب نقش</label>
                                <select class="form-control" multiple="multiple" name="roles[]">
                                    <option value="">لطفا نقش را تعیین کنید :</option>
                                    <option value="">شیراز</option>
                                </select>
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
                            ویرایش کاربر
                        </button>
                    </div>
                    {{---------------------------------------------------}}
                </form>
            </div>
        </div>
@stop

