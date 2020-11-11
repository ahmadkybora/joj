@extends('layouts.front.account.content')
@section('title','پروفایل کاربری')
    @section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{asset('panel/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">فاطمه برهمند</h3>

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

                                <p class="text-muted">ایران، مازندران</p>

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

                                <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    @endsection
