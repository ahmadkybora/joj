@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست ورود و خروج کاربران</h3>
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
                        <th>آی پی</th>
                        <th>مشخصات سیستم</th>
                        <th>آخرین ورود</th>
                        <th>آخرین خروج</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($userLogs as $count=>$userLog)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$userLogs->username}}</td>
                            <td>{{$userLogs->ip}}</td>
                            <td>{{$userLogs->system_info}}</td>
                            <td>{{$userLogs->last_login}}</td>
                            <td>{{$userLogs->last_logout}}</td>
                            <td>
                                <a href="{{route('users.show',$userLog->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{ route('users.delete',$userLog->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('user-logs-delete').submit();">
                                    حذف
                                </a>
                                <form id="user-logs-delete" action="{{ route('users-logs.delete',$userLog->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('users-logs.archive',$userLog->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('users-logs-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="users-logs-archive" action="{{ route('users-logs-archive',$userLog->id) }}" method="POST"
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
        {{$userLogs->links()}}
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
