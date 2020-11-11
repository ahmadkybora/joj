{{--------------------------------------Main Sidebar Container-----------------------------}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-------------------------------Brand Logo--------------------------------------------}}
    <a href="index3.html" class="brand-link">
        <img src="{{asset('/panel/dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>
    {{------------------------------------------Sidebar-----------------------------------}}
    <div class="sidebar">
        <div>
            {{-------------------------------Sidebar user panel (optional)------------------------}}
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/panel/dist/img/admin.jpg')}}"
                         class="img-circle elevation-2" alt="User Image" style="width:80px;height:70px;">
                </div>
                <div class="info">
                    <a href="#" class="d-block">احمد منتظری</a>
                </div>
            </div>
            {{---------------------------------Sidebar Menu----------------------------------}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    {{----------------------------Dashboard--------------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                پیشخوان
                            </p>
                        </a>
                    </li>
                    {{-------------------------------User && User Log------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('users.index')}}" class="nav-link">
                                    <i class="fa fa-arrow"></i>
                                    <p>نمایش کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('comments.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش نظرات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users-logs.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ورود و خروج کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد کابر</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------Role------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                نقش ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('roles.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش نقش ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('roles.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد نقش</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------Permission------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                مجوز ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('permissions.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش مجوز ها</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------دسته بندی ها--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                دسته بندی ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('categories.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش دسته بندی</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('categories.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد دسته بندی</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------مقاله ها--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                مقاله ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('articles.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش مقاله ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('articles.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد مقاله</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------دسنه بندی محصولات--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                محصولات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('products.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش محصولات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('products.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد محصولات</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------دسنه بندی برندها--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                برند ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('brands.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>ایجاد برند</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('brands.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش برند</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------اطلاعات معاملات--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                اطلاعات معاملات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('payments.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش پرداخت ها</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('orders.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش سفارشات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('cards.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش سبد خرید</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------پیامها--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                پیامها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('messages.index')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>پیامهای ارسال شده</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('messages.insert')}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>پیامهای دریافت شده</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-------------------------------خروج کاربران--------------------------------}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                خروج کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    خروج از حساب کاربری
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    {{--------------------------------------------------------------------}}
                </ul>
            </nav>
        </div>
    </div>
</aside>

