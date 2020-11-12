@extends('layouts.panel.content')

@section('content')
    <div class="col-12">
        <div class="card card-primary mt-3">
            <div class="card-header">
                <h3 class="card-title">لیست مقاله ها</h3>
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
                        <th>عنوان مقاله</th>
                        <th>نویسنده مقاله</th>
                        <th>تصویر</th>
                        <th>تاریخ ثبت</th>
                        <th>وضعیت</th>
                        <th>گزینه ها</th>
                    </tr>
                    @foreach($articles as $count => $article)
                        <tr class="text-center">
                            <td>{{ ($articles->currentPage() -1) * $articles->perpage() + $count+1}}</td>
                            <td>{{$article->articleTitle}}</td>
                            <td>{{$article->creator}}</td>
                            <td><img src="" alt="avatar" class="rounded" style="width:50px;height:50px;"></td>
                            <td>{{$article->created_at}}</td>
                            <td>
                                @if($article->status == 'ACTIVE')
                                    <span class="badge badge-success">تایید شده</span>
                                @elseif($article->status == 'FAILED')
                                    <span class="badge badge-danger">رد شده</span>
                                @elseif($article->status == 'PENDING')
                                    <span class="badge badge-warning">در انتظار تایید</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('articles.show',$article->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                <a href="{{route('articles.edit',$article->id)}}" class="btn btn-success btn-sm">ویرایش</a>
                                <a href="{{ route('articles.delete',$article->id) }}" class="btn btn-danger btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('article-delete').submit();">
                                    حذف
                                </a>
                                <form id="article-delete" action="{{ route('articles.delete',$article->id) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                                <a href="{{ route('articles.archive',$article->id) }}" class="btn btn-secondary btn-sm"
                                   onclick="event.preventDefault(); document.getElementById('article-archive').submit();">
                                    بایگانی
                                </a>
                                <form id="article-archive" action="{{ route('articles.archive',$article->id) }}" method="POST"
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
        {{$articles->links()}}
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
