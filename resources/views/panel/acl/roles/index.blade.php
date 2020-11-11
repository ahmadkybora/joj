@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست نقش ها</h3>
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
                        <th>عنوان نقش</th>
                        <th>نویسنده نقش</th>
                        <th>تاریخ ثبت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($roles as $count=>$role)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$role->roleName}}</td>
                            <td>{{$role->roleCreator}}</td>
                            <td>{{$role->created_at}}</td>
                            <td>
                                <a href="{{route('roles.show',$role->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('roles.delete',$role->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('role-delete').submit();">
                                    حذف
                                </a>
                                <form id="role-delete" action="{{ route('roles.delete',$role->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('roles.archive',$role->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('role-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="role-archive" action="{{ route('roles.archive',$role->id) }}" method="POST"
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
        {{$roles->links()}}
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
