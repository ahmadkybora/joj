    @extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست دسته بندی ها</h3>
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
                        <th>عنوان دسته بندی</th>
                        <th>نویسنده</th>
                        <th>تصویر</th>
                        <th>تاریخ ثبت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($categories as $count=>$category)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->creator}}</td>
{{--                            <td>{{$category->users->pluck('username')->immplode(' , ')}}</td>--}}
                            <td><img src="" alt="avatar" class="rounded" style="width:50px;height:50px;"></td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('categories.update',$category->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('categories.delete',$category->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('category-delete').submit();">
                                    حذف
                                </a>
                                <form id="category-delete" action="{{ route('categories.delete',$category->id) }}"
                                      method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('categories.archive',$category->id) }}"
                                   class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('category-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="category-archive" action="{{ route('categories.archive',$category->id) }}"
                                      method="POST"
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
        {{$categories->links()}}
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
