@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست برندها</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>عنوان برند</th>
                        <th>نویسنده</th>
                        <th>تصویر</th>
                        <th>تاریخ ثبت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($brands as $count=>$brand)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$brand->creator}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td><img src="/{{$brand->images->first()->path}}" alt="avatar" class="img-circle" style="width:50px;height:50px;"></td>
                            <td>{{$brand->created_at}}</td>
                            <td>
                                <a href="{{route('brands.show',$brand->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('brands.update',$brand->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('brands.delete',$brand->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('brand-delete').submit();">
                                    حذف
                                </a>
                                <form id="brand-delete" action="{{ route('brands.delete',$brand->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('brands.archive',$brand->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('brand-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="brand-archive" action="{{ route('brands.archive',$brand->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$brands->links()}}
    </div>
    {{----------------------------------------------------------------------------------------------------}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $("#demo01").animatedModal({--}}
{{--                animatedIn: 'zoomIn',--}}
{{--                animatedOut: 'bounceOut',--}}
{{--                color: '#39BEB9',--}}
{{--                beforeOpen: function () {--}}
{{--                    var children = $(".thumb");--}}
{{--                    var index = 0;--}}

{{--                    function addClassNextChild() {--}}
{{--                        if (index == children.length) return;--}}
{{--                        children.eq(index++).show().velocity("transition.expandIn", {--}}
{{--                            opacity: 1,--}}
{{--                            stagger: 250--}}
{{--                        });--}}
{{--                        window.setTimeout(addClassNextChild, 200);--}}
{{--                    }--}}

{{--                    addClassNextChild();--}}
{{--                },--}}
{{--                afterClose: function () {--}}
{{--                    $(".thumb").hide();--}}
{{--                }--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
@stop
