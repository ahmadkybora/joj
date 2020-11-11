@extends('layouts.auth.app')
@section('title','ثبت نام')
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>ثبت نام در سایت</b>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">ثبت نام کاربر جدید</p>

                <form action="{{route('register')}}" method="POST">
                    @csrf
                    {{---------------------------------------------------}}
                    <div class="form-group mb-3">
                        <select class="form-control" name="sex" id="sex">
                            <option value="">لطفا جنسیت را انتخاب کنید</option>
                            <option value="0">مرد</option>
                            <option value="1">زن</option>
                            <div class="input-group-append">
                                <span class="fa fa-user input-group-text"></span>
                            </div>
                        </select>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="first_name" name="first_name"
                               placeholder="نام">
                        <div class="input-group-append">
                            <span class="fa fa-user input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               placeholder="نام خانوادگی">
                        <div class="input-group-append">
                            <span class="fa fa-user input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="ایمیل">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="number" name="home_phone" id="home_phone" class="form-control"
                               placeholder="شماره تلفن منزل">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="شماره همراه">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="form-control" placeholder="تکرار رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                                         style="position: relative;"><input type="checkbox"
                                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    با <a href="#">شرایط</a> موافق هستم
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                        </div>
                    </div>
                    {{------------------------------------------------------------}}
                </form>
                {{------------------------------------------------------------}}
                <a href="{{route('login')}}" class="text-center">من قبلا ثبت نام کرده ام</a>
            </div>
        </div>
        {{-------------------------------------------------------------------------------------}}
        <script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('panel/plugins/iCheck/icheck.min.js')}}"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                })
            })
        </script>
@stop
