@extends('layouts.panel.content')
@section('content')
    <div class="content-wrapper" style="min-height: 511px;">
        <div class="col-12">
            <div class="card card-primary mt-3">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>نمایش نقش</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">خانه<i
                                                class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('roles.index')}}">برگشت به لیست
                                            نقش ها</a><i
                                            class="fa fa-backward"></i>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <div class="card-body table-responsive p-0">
                    <h1>{{$role->roleName}}</h1>
                    <br>
                    <h1>{{$role->roleCreator}}</h1>
                    <br>
                    <h1>{{$role->permissions->pluck('permissionName')->implode(' , ')}}</h1>
                    <br>
                </div>
            </div>
        </div>
    </div>
    {{----------------------------------------------------------------------------------------------------}}
@stop
