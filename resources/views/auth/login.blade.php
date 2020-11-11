@extends('layouts.auth.app')
@section('title','ورود')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <img src="">
            <h1>ورود به سایت</h1>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    {{-------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" class="form-control" placeholder="نام کاربری">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    {{-------------------------------------------------}}
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="رمز عبور">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    {{-------------------------------------------------}}
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label class="">
                                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                                         style="position: relative;"><input type="checkbox"
                                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    یاد آوری من
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary btn-block btn-flat">ورود</button>
                        </div>
                    </div>
                </form>
                {{-----------------------------------------------}}
                <p class="mb-1">
                    <a href="#">رمز عبورم را فراموش کرده ام.</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center">ثبت نام</a>
                </p>
            </div>
        </div>
    </div>
@endsection

