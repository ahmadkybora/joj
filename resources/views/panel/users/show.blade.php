@extends('layouts.panel.content')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>پروفایل</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('users.index')}}">برگشت</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{asset('/panel/dist/img/admin.jpg')}}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$user->username}}</h3>

                            <p class="text-muted text-center">مهندس نرم افزار</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>دنبال شونده</b> <a class="float-right">۱,۳۲۲</a>
                                </li>
                                <li class="list-group-item">
                                    <b>دنبال کننده</b> <a class="float-right">۵۴۳</a>
                                </li>
                                <li class="list-group-item">
                                    <b>دوستان</b> <a class="float-right">۱۳,۲۸۷</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>دنبال کردن</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">درباره من</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fa fa-book mr-1"></i> تحصیلات</strong>

                            <p class="text-muted">
                                لیسانس نرم افزار کامپیوتر
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker mr-1"></i> موقعیت</strong>

                            <p class="text-muted">ایران، مشهد</p>

                            <hr>

                            <strong><i class="fa fa-pencil mr-1"></i> مهارت‌ها</strong>

                            <p class="text-muted">
                                <span class="badge badge-danger">UI Design</span>
                                <span class="badge badge-success">Coding</span>
                                <span class="badge badge-info">Javascript</span>
                                <span class="badge badge-warning">PHP</span>
                                <span class="badge badge-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-text-o mr-1"></i> یادداشت</strong>

                            <p class="text-muted">من فقط یک برنامه نویس معمولی هستم</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">فعالیت‌ها</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm"
                                                 src="../../dist/img/user1-128x128.jpg" alt="user image">
                                            <span class="username">
                          <a href="#">احمد منتظری</a>
                          <a href="#" class="float-left btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                            <span class="description">ارسال شده در ۲۵ آذر ۱۳۹۷</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>

                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                            ابزارهای کاربردی می باشد.
                                        </p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                اشتراک گذاری</a>
                                            <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-thumbs-o-up mr-1"></i> لایک</a>
                                            <span class="float-left">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> نظر (۵)
                          </a>
                        </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text"
                                               placeholder="نظر خود را وارد کنید">
                                    </div>
                                    <!-- /.post -->

                                    <!-- Post -->
                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm"
                                                 src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                            <span class="username">
                          <a href="#">نینا الکس</a>
                          <a href="#" class="float-left btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                            <span class="description">ارسال شده - ۳ روز پیش</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                                            ابزارهای کاربردی می باشد.
                                        </p>

                                        <form class="form-horizontal">
                                            <div class="input-group input-group-sm mb-0">
                                                <input class="form-control form-control-sm"
                                                       placeholder="نظر خود را تایپ کنید">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-danger">ارسال</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.post -->

                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm"
                                                 src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                            <span class="username">
                          <a href="#">محمد محمدی</a>
                          <a href="#" class="float-left btn-tool"><i class="fa fa-times"></i></a>
                        </span>
                                            <span class="description">ارسال شده - ۵ روز پیش</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="../../dist/img/photo2.png"
                                                             alt="Photo">
                                                        <img class="img-fluid" src="../../dist/img/photo3.jpg"
                                                             alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg"
                                                             alt="Photo">
                                                        <img class="img-fluid" src="../../dist/img/photo1.png"
                                                             alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                اشتراک گذاری</a>
                                            <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-thumbs-o-up mr-1"></i> لایک</a>
                                            <span class="float-left">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> نظر (۵)
                          </a>
                        </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text"
                                               placeholder="نظر خود را تایپ کنید">
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop
