@extends('layouts.panel.content')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title text-center"><h1>تععین سطح دسترسی کاربر {{ $user->username }}</h1></div>
            <hr>
            <form method="POST" action="{{route('users.doAccess')}}" id="formData">
                @csrf
                {{---------------------------------Role Title-------------------------------------------------}}
                <div class="form-group">
                    <label for="name">عنوان نقش</label>
                    <input type="text" class="form-control" id="roleName" name="roleName"
                           placeholder="عنوان نقش را وارد نمایید ...">
                </div>
                <br>
                {{---------------------Give all permissions------------------------}}
                <div class="card bg-secondary-gradient">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="permissionsAll">گرفتن همه مجوزها</label>
                            <input type="checkbox" name="permissionsAll[]" id="permissionsAll"
                                   onclick="permissionsAll()">
                        </div>
                    </div>
                </div>
                <br>
                {{---------------------User && User Log && Comment----------------------}}
                <div id="mypermission" name="mypermission">
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                {{-----------------User-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-user"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">کاربران</span></a>
                                </li>
                                {{-----------------User Log-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-user-log"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">ورود و خروج کاربران</span></a>
                                </li>
                                {{-----------------Comment-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-comment"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">نظرات کاربران</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-user" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_all" name="permissionName[]"
                                                       value="user_all"
                                                    {{$user->permissions->contains('permissionName','user_all') ? 'checked' : ''}}>
                                                <label for="user_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_insert" name="permissionName[]"
                                                       value="user_insert"
                                                {{$user->permissions->contains('permissionName','user_insert') ? 'checked' : ''}}>
                                                <label for="user_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_update" name="permissionName[]"
                                                       value="user_update"
                                                {{$user->permission->contains('permissionName','user_update') ? 'checked' : ''}}>
                                                <label for="user_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_delete" name="permissionName[]"
                                                       value="user_delete"
                                                {{$user->permissions->contains('permissionName','user_delete') ? 'checked' : ''}}>
                                                <label for="user_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_archive" name="permissionName[]"
                                                       value="user_archive"
                                                {{$user->permissions->contains('permissionName','user_archive' ? 'checked' : ''}}>
                                                <label for="user_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-user-log" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_log_all" name="permissionName[]"
                                                       value="user_log_all"
                                                {{$user->permissions->contains('permissions','user_log_all') ? 'checked' : ''}}>
                                                <label for="user_log_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_log_delete" name="permissionName[]"
                                                       value="user_log_delete"
                                                {{$user->permissions->contins('permissionName','user_log_delete') ? 'checked' : ''}}>
                                                <label for="user_log_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="user_log_archive"
                                                       name="permissionName[]" value="user_log_archive"
                                                {{$user->permissions->contains('permissionName','user_log_archive') ? 'checked' : ''}}>
                                                <label for="user_log_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-comment" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="comment_all" name="permissionName[]"
                                                       value="comment_all"
                                                {{$user->permissions->contains('permissionName','comment_all') ? 'checked' : ''}}>
                                                <label for="comment_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="comment_delete"
                                                       name="permissionName[]" value="comment_delete"
                                                {{$user->permissions->contains('permissionName','comment_delete') ? 'checked' : ''}}>
                                                <label for="comment_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="comment_archive"
                                                       name="permissionName[]" value="comment_archive"
                                                {{$user->permissions->contains('permissionName','comment_arcive') ? 'checked' : ''}}>
                                                <label for="comment_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------}}
                    </div>
                    <br>
                    {{---------------------Role && Permission----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                {{-----------------Employee Role-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-employee-role"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">نقش ها</span></a>
                                </li>
                                {{-----------------Employee Permission-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-employee-permission"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">مجوزها</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-employee-role" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="role_all"
                                                       name="permissionName[]" value="role_all"
                                                {{$user->permissions->contains('permissionName','role_all') ? 'checked' : ''}}>
                                                <label for="role_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="role_insert"
                                                       name="permissionName[]" value="role_insert"
                                                {{$user->permissions->contains('permissionName','role_insert') ? 'checked' : ''}}>
                                                <label for="role_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="role_update"
                                                       name="permissionName[]" value="role_update"
                                                {{$user->permissions->contains('permissionName','role_update') ? 'checked' : ''}}>
                                                <label for="role_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="role_delete"
                                                       name="permissionName[]" value="role_delete"
                                                {{$user->permissions->contains('permissionName','role_delete') ? 'checked' : ''}}>
                                                <label for="role_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="role_archive"
                                                       name="permissionName[]" value="role_archive"
                                                {{$user->permissions->contains('permissionName','role_archive') ? 'checked' : ''}}>
                                                <label for="role_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-employee-permission" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="permission_all"
                                                       name="permissionName[]" value="permission_all"
                                                {{$user->permissions->contains('permissionName','permission_all') ? 'checked' : ''}}>
                                                <label for="permission_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{-----------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="permission_archive"
                                                       name="permissionName[]" value="permission_archive"
                                                {{$user->permissons->contains('permissionName','permission_archive') ? 'checked' : ''}}>
                                                <label for="permission_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{-----------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------}}
                    </div>
                    <br>
                    {{---------------------Article && ArticlesCategories----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                {{-----------------Article-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-article"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">مقاله ها</span></a>
                                </li>
                                {{-----------------ArticlesCategories-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-articles-categories"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">دسته بندی مقاله ها</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-article" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="article_all"
                                                       name="permissionName[]" value="article_all"
                                                {{$user->permissions->contains('permissionName','article_all') ? 'checked' : ''}}>
                                                <label for="article_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="article_insert"
                                                       name="permissionName[]" value="article_insert"
                                                {{$user->permission->contains('permissionName','article_insert') ? 'checked' : ''}}>
                                                <label for="article_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="article_update"
                                                       name="permissionName[]" value="article_update"
                                                {{$user->permissions->contains('permissionName','article_update' ? 'checked' : '')}}>
                                                <label for="article_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="article_delete"
                                                       name="permissionName[]" value="article_delete"
                                                {{$user->permissions->contains('permissionName','article_delete') ? 'checked' : ''}}>
                                                <label for="article_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="article_archive"
                                                       name="permissionName[]" value="article_archive"
                                                {{$user->permissions->contains('permissionName','article_archive') ? 'checked' : ''}}>
                                                <label for="article_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-articles-categories" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id=articles_categories_all"
                                                       name="permissionName[]" value="articles_categories_all"
                                                {{$user->permissions->contains('permissionName','article_categories_all') ? 'checked' : ''}}>
                                                <label for="articles_categories_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="articles_categories_insert"
                                                       name="permissionName[]" value="articles_categories_insert"
                                                {{$user->permissions->contains('permissionName','article_categories_insert') ? 'checked': ''}}>
                                                <label for="articles_categories_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="articles_categories_update"
                                                       name="permissionName[]" value="articles_categories_update"
                                                {{$user->permissions->contains('permissionName','article_categories_update') ? 'checked' : ''}}>
                                                <label for="articles_categories_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="articles_categories_delete"
                                                       name="permissionName[]" value="articles_categories_delete"
                                                {{$user->permissions->contains('permissionName','article_categories_delete') ? 'checked' : ''}}>
                                                <label for="articles_categories_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="articles_categories_archive"
                                                       name="permissionName[]" value="articles_categories_archive"
                                                {{$user->permissions->contains('permissionName','article_categories_archive') ? 'checked' : ''}}>
                                                <label for="articles_categories_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------}}
                    </div>
                    <br>
                    {{---------------------Product && ProductsCategories----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                {{-----------------Product-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-product"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">محصولات</span></a>
                                </li>
                                {{-----------------ProductCategories-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-products-categories"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">دسته بندی محصولات</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-product" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="product_all" name="permissionName[]"
                                                       value="product_all"
                                                {{$user->permissions->contains('permissionName','product_all') ? 'checked' : ''}}>
                                                <label for="product_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="product_insert"
                                                       name="permissionName[]" value="product_insert"
                                                {{$user->permissions->contains('permissionName','product_insert') ? 'checked' : ''}}>
                                                <label for="product_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="product_update"
                                                       name="permissionName[]" value="product_update"
                                                {{$user->permissions->contains('permissionName','product_update') ? 'checked' : ''}}>
                                                <label for="product_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="product_delete"
                                                       name="permissionName[]" value="product_delete"
                                                {{$user->permissions->contains('permissionName','product_delete') ? 'checked' : ''}}>
                                                <label for="product_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="product_archive"
                                                       name="permissionName[]" value="product_archive"
                                                {{$user->permssions->contains('permissionName','product_archive') ? 'checked' : ''}}>
                                                <label for="product_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-products-categories" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id=products_categories_all"
                                                       name="permissionName[]" value="products_categories_all">
                                                {{$user->permissions->contains('permissionName','product_categories_all') ? 'checked' : ''}}
                                                <label for="products_categories_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="products_categories_insert"
                                                       name="permissionName[]" value="products_categories_insert"
                                                {{$user->permissions->contains('permissionName','products_categories_insert')}}>
                                                {{--                                            @endif--}}
                                                <label for="products_categories_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="products_categories_update"
                                                       name="permissionName[]" value="products_categories_update"
                                                {{$user->permissions->contains('permissionName','products_categories_update') ? 'checked' : ''}}>
                                                <label for="products_categories_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="products_categories_delete"
                                                       name="permissionName[]" value="products_categories_delete"
                                                {{$user->permissions->contains('permissionName','product_categories_delete') ? 'checked' : ''}}>
                                                <label for="products_categories_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="products_categories_archive"
                                                       name="permissionName[]" value="products_categories_archive"
                                                {{$user->permissions->contains('permissionName','product_categories_archive')? 'checked' : ''}}>
                                                <label for="products_categories_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------}}
                    </div>
                    <br>
                    {{---------------------Order && Payment----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                {{-----------------Product-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-ordert"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">سفارشات</span></a>
                                </li>
                                {{-----------------ProductCategories-----------------}}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-payment"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">پرداخت ها</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-order" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="order_all" name="permissionName[]"
                                                       value="order_all"
                                                {{$user->permissions->contains('permissionName','order_all') ? 'checked' : ''}}>
                                                <label for="order_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="order_delete"
                                                       name="permissionName[]" value="order_delete"
                                                {{$user->permissions->contains('permissionName','order_delete') ? 'checked' : ''}}>
                                                <label for="order_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="order_archive"
                                                       name="permissionName[]" value="order_archive"
                                                {{$user->permissions->contains('permissionName','order_archive') ? 'checked' : ''}}>
                                                <label for="order_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                                {{---------------------------------------}}
                                <div id="tabe-payment" class="container tab-pane">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id=payment_all"
                                                       name="permissionName[]" value="payment_all"
                                                {{$user->permissions->contains('permissionName','payment_all') ? 'checked' : ''}}>
                                                <label for="payment_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="payment_delete"
                                                       name="permissionName[]" value="payment_delete"
                                                {{$user->permissions->contains('permissionName','payment_delete') ? 'checked' : ''}}>
                                                <label for="payment_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="payment_archive"
                                                       name="permissionName[]" value="payment_archive"
                                                {{$user->permissions->contians('permissionName','payment_archive') ? 'checked' : ''}}>
                                                <label for="payment_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{---------------------------------------------}}
                    </div>
                    <br>
                    {{---------------------Cart----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-cart"><i
                                            class="fa fa-check"></i> <span
                                            class="hidden-xs text-dark">سبد خرید</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-cart" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="cart_all" name="permissionName[]"
                                                       value="cart_all"
                                                {{$user->permissions->contains('permissionName','cart_all') ? 'checked' : ''}}>
                                                <label for="cart_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="cart_delete" name="permissionName[]"
                                                       value="cart_delete"
                                                {{$user->permissions->contains('permissionName','cart_delete') ? 'checked' : ''}}>
                                                <label for="cart_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="cart_archive" name="permissionName[]"
                                                       value="cart_archive"
                                                {{$user->permissions->contains('permissionName','cart_archive') ? 'checked' : ''}}>
                                                <label for="cart_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{---------------------Message----------------------}}
                    <div class="card bg-secondary-gradient">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tabe-message"><i
                                            class="fa fa-check"></i> <span class="hidden-xs text-dark">پیامها</span></a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            {{---------------------------------------------------}}
                            <div class="tab-content">
                                <div id="tabe-message" class="container tab-pane active show">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="message_all" name="permissionName[]"
                                                       value="message_all"
                                                {{$user->permissions->contains('permissionName','message_all') ? 'checked' : ''}}>
                                                <label for="message_all">مشاهده</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="message_insert"
                                                       name="permissionName[]" value="message_insert"
                                                {{$user->permissions->contains('permissionName','message_insert') ? 'checked' : ''}}>
                                                <label for="message_insert">افزودن</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="message_update"
                                                       name="permissionName[]" value="message_update"
                                                {{$user->permissions->contains('permissionName','message_update') ? 'checked' : ''}}>
                                                {{--                                            @endif--}}
                                                <label for="message_update">ویرایش</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="message_delete"
                                                       name="permissionName[]" value="message_delete"
                                                {{$user->permissions->contains('permissionName','message_delete') ? 'checked' : ''}}>
                                                <label for="message_delete">حذف</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                        <div class="col-md-2">
                                            <div class="icheck-material-white">
                                                <input type="checkbox" id="message_archive"
                                                       name="permissionName[]" value="message_archive"
                                                {{$user->permissons->contains('permissionName','message_archive') ? 'checked' : ''}}>
                                                <label for="message_archive">بایگانی</label>
                                            </div>
                                        </div>
                                        {{---------------------------------------}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{--------------------Description Permission-----------------------}}
                    <div class="form-group">
                        <label for="description text-dark" class="text-dark">توضیحاتی در مورد نقش وارد کنید</label>
                        <textarea name="description"
                                  class="form-control"
                                  id="description" rows="10"
                                  placeholder="متن را وارد کنید...."></textarea>
                    </div>
                    {{---------------------------------------------------}}
                    <div class="form-group">
                        <button class="form-control btn btn-success btn-sm">ذخیره اطلاعات</button>
                    </div>
                    {{---------------------------------------------------}}
                </div>
            </form>
        </div>
    </div>
    {{------------------------------------------------------------------------------------------}}
    <script src="{{asset('/panel/js/users/access/access.js')}}"></script>
@stop
