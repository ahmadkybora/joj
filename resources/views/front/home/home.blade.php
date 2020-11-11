@extends('layouts.front.content')

@section('content')
    {{-------------------------Baner----------------------------}}
    <div class="banner">
        <div class="banner_background" style="background-image:url('/front/images/banner_background.jpg')"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="/front/images/banner_product.png" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <div class="banner_content">
                            <h1 class="banner_text">عصر جدید گوشی های هوشمند</h1>
                            <div class="banner_price"><span>$530</span>$460</div>
                            <div class="banner_product_name">Apple Iphone 6s</div>
                            <div class="button banner_button"><a href="#">اکنون خرید کنید</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----------------------------------Characteristics---------------------}}
        <div class="characteristics">
            <div class="container">
                <div class="row">

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="/front/images/char_1.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">تحویل رایگان</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="/front/images/char_2.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">تحویل رایگان</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="/front/images/char_3.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">تحویل رایگان</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="/front/images/char_4.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">تحویل رایگان</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{---------------------------deals-of-the-week--------------------------}}
        <div class="deals_featured">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Deals -->

                        <div class="deals">
                            <div class="deals_title">معاملات هفته</div>
                            <div class="deals_slider_container">

                                <!-- Deals Slider -->
                                <div class="owl-carousel owl-theme deals_slider">

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="/front/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">هدفون</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">در دسترس: <span>6</span></div>
                                                    <div class="sold_title ml-auto">قبلاً فروخته شده: <span>28</span>
                                                    </div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">عجله کن</div>
                                                    <div class="deals_timer_subtitle">پیشنهاد به پایان می رسد:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>ساعت ها</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>دقیقه</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="/front/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">هدفون</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">عجله کنید</div>
                                                    <div class="deals_timer_subtitle">پیشنهاد به پایان می رسد:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                            <span>ساعت ها</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                            <span>دقیقه ها</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                            <span>ثانیه ها</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="/front/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">هدفون ها</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">در دسترس : <span>6</span></div>
                                                    <div class="sold_title ml-auto">قبلاً فروخته شده : <span>28</span>
                                                    </div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">عجله کنید</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="deals_slider_nav_container">
                                <div class="deals_slider_prev deals_slider_nav"><i
                                        class="fas fa-chevron-left ml-auto"></i></div>
                                <div class="deals_slider_next deals_slider_nav"><i
                                        class="fas fa-chevron-right ml-auto"></i></div>
                            </div>
                        </div>

                        <!-- Featured -->
                        <div class="featured">
                            <div class="tabbed_container">
                                <div class="tabs">
                                    <ul class="clearfix">
                                        <li class="active">ویژه</li>
                                        <li>حراج</li>
                                        <li>دارای رتبه برتر</li>
                                    </ul>
                                    <div class="tabs_line"><span></span></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            @foreach($products as $product)
                                                <div
                                                    class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
{{--                                                        <img src="/{{$product->images->first()->path}}" alt=""--}}
{{--                                                             style="width:100px;height:100px;"></div>--}}
                                                    <div class="product_content">
                                                        <div class="product_price discount">
                                                            {{$product->product_price}} : تومان</div>
                                                        <div class="product_name">
                                                            <div><a href="{{route('product.single-product',$product->id)}}">{{$product->product_name}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_extras">
                                                            {{--                                                            <div class="product_color">--}}
                                                            {{--                                                                <input type="radio" checked name="product_color"--}}
                                                            {{--                                                                       style="background:#b19c83">--}}
                                                            {{--                                                                <input type="radio" name="product_color"--}}
                                                            {{--                                                                       style="background:#000000">--}}
                                                            {{--                                                                <input type="radio" name="product_color"--}}
                                                            {{--                                                                       style="background:#999999">--}}
                                                            {{--                                                            </div>--}}
                                                            <a href="{{route('cart.add',$product->id)}}"
                                                               class="product_cart_button">افزودن به سبد خرید</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    {{--                                            <ul class="product_marks">--}}
                                                    {{--                                                <li class="product_mark product_discount">-25%</li>--}}
                                                    {{--                                                <li class="product_mark product_new">new</li>--}}
                                                    {{--                                            </ul>--}}
                                                </div>
                                            @endforeach
                                        </div>


                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_2.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Apple iPod shuffle</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button active">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_3.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Sony MDRZX310W</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_4.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price discount">$225<span>$300</span></div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">LUNA Smartphone</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount">-25%</li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_5.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Canon STM Kit...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_6.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Samsung J330F...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_7.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Lenovo IdeaPad</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount">-25%</li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_8.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Digitus EDNET...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_1.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_2.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_3.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_4.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_5.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_6.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_7.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$379</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        {{--                                    <!-- Slider Item -->--}}
                                        {{--                                    <div class="featured_slider_item">--}}
                                        {{--                                        <div class="border_active"></div>--}}
                                        {{--                                        <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">--}}
                                        {{--                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/front/images/featured_8.png" alt=""></div>--}}
                                        {{--                                            <div class="product_content">--}}
                                        {{--                                                <div class="product_price">$225</div>--}}
                                        {{--                                                <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>--}}
                                        {{--                                                <div class="product_extras">--}}
                                        {{--                                                    <div class="product_color">--}}
                                        {{--                                                        <input type="radio" checked name="product_color" style="background:#b19c83">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#000000">--}}
                                        {{--                                                        <input type="radio" name="product_color" style="background:#999999">--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <button class="product_cart_button">افزودن به سبد خرید</button>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                                        {{--                                            <ul class="product_marks">--}}
                                        {{--                                                <li class="product_mark product_discount"></li>--}}
                                        {{--                                                <li class="product_mark product_new">جدید</li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">افزودن به سبد خرید
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">افزودن به سبد خرید
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="/front/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color"
                                                                   style="background:#b19c83">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#000000">
                                                            <input type="radio" name="product_color"
                                                                   style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">افزودن به سبد خرید</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">جدید</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{--------------------------------popular-categories--------------------------------}}
        <div class="popular_categories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="popular_categories_content">
                            <div class="popular_categories_title">دسته بندی های محبوب</div>
                            <div class="popular_categories_slider_nav">
                                <div class="popular_categories_prev popular_categories_nav"><i
                                        class="fas fa-angle-left ml-auto"></i></div>
                                <div class="popular_categories_next popular_categories_nav"><i
                                        class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                            <div class="popular_categories_link"><a href="#">کاتالوگ کامل</a></div>
                        </div>
                    </div>

                    <!-- Popular Categories Slider -->

                    <div class="col-lg-9">
                        <div class="popular_categories_slider_container">
                            <div class="owl-carousel owl-theme popular_categories_slider">

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="/front/images/popular_1.png"
                                                                                 alt=""></div>
                                        <div class="popular_category_text">تلفن های هوشمند & تبلت ها</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="/front/images/popular_2.png"
                                                                                 alt=""></div>
                                        <div class="popular_category_text">کامپیوتر & لپتاب ها</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="/front/images/popular_3.png"
                                                                                 alt=""></div>
                                        <div class="popular_category_text">گجت ها</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="/front/images/popular_4.png"
                                                                                 alt=""></div>
                                        <div class="popular_category_text">بازیهای ویدیویی & کنسول ها</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="/front/images/popular_5.png"
                                                                                 alt=""></div>
                                        <div class="popular_category_text">تجهیزات جانبی</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{------------------------------Banner 2-------------------------------}}
        <div class="banner_2">
            <div class="banner_2_background"
                 style="background-image:url('/front/images/banner_2_background.jpg')"></div>
            <div class="banner_2_container">
                <div class="banner_2_dots"></div>
                <!-- Banner 2 Slider -->

                <div class="owl-carousel owl-theme banner_2_slider">

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">لپتاب</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">یک محصول بسیار رویایی
                                            </div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="button banner_2_button"><a href="#">کاوش</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="/front/images/banner_2_product.png"
                                                                             alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">لپتاب</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">یک محصول بسیار رویایی
                                            </div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="button banner_2_button"><a href="#">کاوش</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="/front/images/banner_2_product.png"
                                                                             alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">لپتاب</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">یک محصول بسیار رویایی
                                            </div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="button banner_2_button"><a href="#">کاوش</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="/front/images/banner_2_product.png"
                                                                             alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{------------------------------------new-products-------------------------------}}
        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabbed_container">
                            <div class="tabs clearfix tabs-right">
                                <div class="new_arrivals_title">ورودهای داغ جدید</div>
                                <ul class="clearfix">
                                    <li class="active">ویژه</li>
                                    <li>صدا & تصویر</li>
                                    <li>لپتابها & کامپیوترها</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9" style="z-index:1;">

                                    <!-- Product Panel -->
                                    <div class="product_panel panel active">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Astro M2 Black</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Transcend T.Sonic</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">افزودن به سبد
                                                                خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Xiaomi Band 2...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Rapoo T8 White</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Philips BT6900A</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Nokia 3310(2017)...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Rapoo 7100p Gray</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Canon EF</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Gembird SPK-103</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Canon IXUS 175...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                    <!-- Product Panel -->
                                    <div class="product_panel panel">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">افزودن به سبد
                                                                خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                    <!-- Product Panel -->
                                    <div class="product_panel panel">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">افزودن به سبد
                                                                خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="/front/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                       style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                       style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">افزودن به سبد خرید
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">جدید</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="arrivals_single clearfix">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <div class="arrivals_single_image"><img src="/front/images/new_single.png"
                                                                                    alt="">
                                            </div>
                                            <div class="arrivals_single_content">
                                                <div class="arrivals_single_category"><a href="#">تلفن های هوشمند</a>
                                                </div>
                                                <div class="arrivals_single_name_container clearfix">
                                                    <div class="arrivals_single_name"><a href="#">تلفن هوشمند لونا</a>
                                                    </div>
                                                    <div class="arrivals_single_price text-right">$379</div>
                                                </div>
                                                <div class="rating_r rating_r_4 arrivals_single_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <form action="#">
                                                    <button class="arrivals_single_button">افزودن به سبد خرید</button>
                                                </form>
                                            </div>
                                            <div class="arrivals_single_fav product_fav active"><i
                                                    class="fas fa-heart"></i>
                                            </div>
                                            <ul class="arrivals_single_marks product_marks">
                                                <li class="arrivals_single_mark product_mark product_new">جدید</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{----------------------------------best-sellers----------------------------------------}}
        <div class="best_sellers">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabbed_container">
                            <div class="tabs clearfix tabs-right">
                                <div class="new_arrivals_title">فروشندگان داغ</div>
                                <ul class="clearfix">
                                    <li class="active">20 تاپ</li>
                                    <li>سمعی & ویدیو</li>
                                    <li>لپتاب ها & کامپیوتر ها</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <div class="bestsellers_panel panel active">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Samsung
                                                        J730F...</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Nomi Black
                                                        White</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Samsung Charm
                                                        Gold</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Beoplay H7</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Huawei MediaPad
                                                        T3</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="bestsellers_panel panel">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="bestsellers_panel panel">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_1.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_2.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_3.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_4.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_5.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="/front/images/best_6.png" alt="">
                                            </div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">هدفون ها</a></div>
                                                <div class="bestsellers_name"><a href="product.html">Xiaomi Redmi Note
                                                        4</a>
                                                </div>
                                                <div class="rating_r rating_r_4 bestsellers_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="bestsellers_price discount">$225<span>$300</span></div>
                                            </div>
                                        </div>
                                        <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount">-25%</li>
                                            <li class="bestsellers_mark bestsellers_new">جدید</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{---------------------------------adcerts-----------------------------------}}
        <div class="adverts">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_title"><a href="#">روند سال</a></div>
                                <div class="advert_text">پرچم دار های امسال</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="/front/images/adv_1.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_subtitle">روند سال</div>
                                <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                                <div class="advert_text">پرچم دار های امسال</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="/front/images/adv_2.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_title"><a href="#">روند سال</a></div>
                                <div class="advert_text">پرچم دار های امسال</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="/front/images/adv_3.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Trends -->

        <div class="trends">
            <div class="trends_background" style="background-image:url('/front/images/trends_background.jpg')"></div>
            <div class="trends_overlay"></div>
            <div class="container">
                <div class="row">

                    <!-- Trends Content -->
                    <div class="col-lg-3">
                        <div class="trends_container">
                            <h2 class="trends_title">روند سال</h2>
                            <div class="trends_text"><p>پرچم دار های امسال</p>
                            </div>
                            <div class="trends_slider_nav">
                                <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-9">
                        <div class="trends_slider_container">

                            <!-- Trends Slider -->

                            <div class="owl-carousel owl-theme trends_slider">

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_1.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">Smartphones</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">Jump White</a></div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">new</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_2.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">Smartphones</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">Samsung Charm...</a>
                                                </div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">new</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_3.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">تلفن های هوشمند</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">احمد منتظری</a></div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">جدید</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_1.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">تلفن های هوشمند</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">احمد منتظری</a></div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">جدید</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_2.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">تلفن های هوشمند</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">احمد منتظری</a></div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">جدید</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="/front/images/trends_3.jpg" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">تلفن های هوشمند</a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html">احمد منتظری</a></div>
                                                <div class="trends_price">$379</div>
                                            </div>
                                        </div>
                                        <ul class="trends_marks">
                                            <li class="trends_mark trends_discount">-25%</li>
                                            <li class="trends_mark trends_new">جدید</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{---------------------------------latest-reviews------------------------------------}}
        <div class="reviews">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="reviews_title_container">
                            <h3 class="reviews_title">آخرین بررسی ها</h3>
                            <div class="reviews_all ml-auto"><a href="#">مشاهده همه<span>بررسی</span></a></div>
                        </div>

                        <div class="reviews_slider_container">

                            <!-- Reviews Slider -->
                            <div class="owl-carousel owl-theme reviews_slider">

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 day ago</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2روز قبل</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 روز قبل</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 روز قبل</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 day ago</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews Slider Item -->
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image"><img src="/front/images/review_3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">احمد منتظری</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating">
                                                    <i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 روز قبل</div>
                                            </div>
                                            <div class="review_text"><p>این یک وبسایت فروشگاهی است</p></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="reviews_dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
