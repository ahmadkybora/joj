@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست کاربران</h3>
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
                        <th>نقش</th>
                        <th>جنسیت</th>
                        <th>تصویر</th>
                        <th>تاریخ ثبت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($users as $count => $user)
                        <tr class="text-center">
                            <td>{{ ($users->currentPage() -1) * $users->perpage() + $count+1 }}</td>
                            <td>{{$user->username}}</td>
                            @if($user->type == 0)
                            <td> Admin </td>
                            @elseif($user->type == 1)
                            <td> User </td>
                            @endif
                            @if($user->sex == 0)
                                <td> Woman </td>
                            @elseif($user->sex == 1)
                                <td> Man </td>
                            @endif
{{--                            <td><img src="/{{$usr->images->first()->path}}" alt="avatar" class="rounded" style="width:50px;height:50px;"></td>--}}
                            <td>{{$user->created_at}}</td>
                            <td>
                                <a href="{{route('users.show',$user->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('users.delete',$user->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('user-delete').submit();">
                                    حذف
                                </a>
                                <form id="user-delete" action="{{ route('users.delete',$user->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('users.archive',$user->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('user-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="user-archive" action="{{ route('users.archive',$user->id) }}" method="POST"
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
        {{$users->links()}}
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
