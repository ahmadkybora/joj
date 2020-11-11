{{--------------------------------navbar-------------------------------}}
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
                                <a href="#">فارسی<i class="fas fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">انگلیسی</a></li>
                                    <li><a href="#">عربی</a></li>
                                    <li><a href="#">ترکی</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="top_bar_user">
                        @if($user=auth()->user())
                            <div><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    خروج از حساب کاربری
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <div>{{$user->firstname.' '.$user->lastname}}</div>
                            <div><a href="{{route('account.profile-show')}}">ورود به پنل کاربری</a></div>
                        @else
                            <div class="user_icon"><img src="{{asset('/front/images/user.svg')}}" alt=""></div>
                            <div><a href="{{route('register')}}">ثبت نام</a></div>
                            <div><a href="{{route('login')}}">ورود</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
