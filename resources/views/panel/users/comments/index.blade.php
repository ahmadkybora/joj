@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست نظرات</h3>
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
                        <th>نام کاربری</th>
                        <th>تاریخ ارسال نظر</th>
                        <th>وضعیت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($comments as $count=>$comment)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$comment->username}}</td>
                            <td>{{$comment->type}}</td>
                            <td><img src="" alt="avatar" class="rounded" style="width:50px;height:50px;"></td>
                            <td>{{$comment->created_at}}</td>
                            <td><span class="badge badge-success">تایید شده</span></td>
                            <td>
                                <a href="{{route('comments.show',$comment->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('comments.update',$comment->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('comments.delete',$comment->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('comments-delete').submit();">
                                    حذف
                                </a>
                                <form id="comments-delete" action="{{ route('users.delete',$user->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('users.archive',$comment->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('comments-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="comments-archive" action="{{ route('comments.archive',$comment->id) }}" method="POST"
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
        {{$comments->links()}}
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
