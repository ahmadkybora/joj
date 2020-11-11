@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست مجوزها</h3>
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
                        <th>عنوان مجوز</th>
                        <th>نقش های مرتبط</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($permissions as $count=>$permission)
                        <tr class="text-center">
                            <td>{{$count+1}}</td>
                            <td>{{$permission->permissionName}}</td>
                            <td>{{$permission->roles->pluck('roleName')->implode(' , ')}}</td>
                            <td>
                                <a href="{{route('permissions.show',$permission->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{ route('permissions.delete',$permission->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('permission-delete').submit();">
                                    حذف
                                </a>
                                <form id="permission-delete" action="{{ route('users.delete',$permission->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('permissions.archive',$permission->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('permission-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="permission-archive" action="{{ route('permissions.archive',$permission->id) }}" method="POST"
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
        {{$permissions->links()}}
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
