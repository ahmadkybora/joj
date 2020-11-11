<header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="/front/images/phone.png" alt=""></div>
                            +98 9392141724
                        </div>
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><img src="/front/images/mail.png" alt=""></div>
                            <a href="mailto:fastsales@gmail.com">amontazeri53@yahoo.com</a></div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR Euro</a></li>
                                            <li><a href="#">GBP British Pound</a></li>
                                            <li><a href="#">JPY Japanese Yen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="/front/images/user.svg" alt=""></div>
                                <div><a href="#">ثبت نام</a></div>
                                <div><a href="#">ورود</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#">جوجو</a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input"
                                               placeholder="جستجوی محصولات...">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">همه دسته بندی ها</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">همه دسته بندی ها</a></li>
                                                    <li><a class="clc" href="#">کامپیوتر ها</a></li>
                                                    <li><a class="clc" href="#">لپتاب ها</a></li>
                                                    <li><a class="clc" href="#">دوربین ها</a></li>
                                                    <li><a class="clc" href="#">سخت افزار</a></li>
                                                    <li><a class="clc" href="#">گوشی های هوشمند</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img
                                                src="/front/images/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="/front/images/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">لیست علاقه مندیها</a></div>
                                    <div class="wishlist_count">115</div>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="/front/images/cart.png" alt="">
                                        <div class="cart_count"><span>10</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="{{route('cart.show')}}">سبد خرید</a></div>
                                        <div class="cart_price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">دسته بندی ها</div>
                                </div>

                                <ul class="cat_menu">
                                    <li><a href="#">کامپیوترها & لپتاب ها <i class="fas fa-chevron-right ml-auto"></i></a>
                                    </li>
                                    <li><a href="#">دوربین ها & تصاویر<i class="fas fa-chevron-right"></i></a></li>
                                    <li class="hassubs">
                                        <a href="#">سخت افزار<i class="fas fa-chevron-right"></i></a>
                                        <ul>
                                            <li class="hassubs">
                                                <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">تبلت ها<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">تلویزیون & صدا<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">گجت ها<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">ماشین های الکترونیک<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">بازیهای ویدئویی & کنسول ها<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">تجهیزات جانبی<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </div>

                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">خانه<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs">
                                        <a href="#">معاملات عالی<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">مارک های معروف<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">صفحات<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="shop.html">فروشگاه<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="product.html">محصولات<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                            <li><a href="blog.html">وبلاگ<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog_single.html">پست وبلاگ<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                            <li><a href="regular.html">پست منظم<i
                                                        class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.html">سبد خرید<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">مخاطب<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">وبلاگ<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">مخاطب<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div>

                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner">
                                            <span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menu -->

        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page_menu_content">

                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input"
                                           placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children">
                                    <a href="#">زبان<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">فارسی<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">عربی<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">انگلیسی<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">ترکی<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">واحد پول<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">تومان ایران<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">دلار آمریکا<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">یورو اروپا<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">درهم امارات<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">خانه<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">معاملات عالی<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">معاملات عالی<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children">
                                            <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">مارک های معروف<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">مارک های معروف<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">سبک های روند<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">وبلاگ<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item"><a href="contact.html">مخاطب<i
                                            class="fa fa-angle-down"></i></a></li>
                            </ul>

                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="/front/images/phone_white.png" alt=""></div>
                                    +98 9392141724
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="/front/images/mail_white.png" alt=""></div>
                                    <a href="mailto:fastsales@gmail.com">amontazeri@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
