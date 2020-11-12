@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">صفحه مورد نظر وجود ندارد</h3>
            </div>
            <div style="background-color: gray">
                <img src="{{ asset('panel/img/errors/404.jpg') }}"
                     alt="avatar"
                     class="img-circle"
                     style="width:1000px;height:900px;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;">
            </div>
        </div>
    </div>
@stop
