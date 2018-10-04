
@if (Auth::check())
    <header class="q-header">
        <div class="q-inner">
            <a href="/home" class="q-logo">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="q-logo__img">
            </a>
            <div class="q-mobile-burger js-toggle-mobile-menu">
                <span></span>
            </div>
            <div class="q-user">
                <div class="q-user__name _cursor" style="padding-right: 7%">
                    <span><strong>9999 $</strong></span>
                </div>
                <div class="q-user__avatar">
                    <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="q-user__avatar-img">
                </div>
                <div class="q-user__info">
                    <div class="q-user__name _cursor">
                        <span class="q-user__name--text">{{ Auth::user()->full_name }}</span>
                        <ul class="q-main-submenu">
                            <li class="q-main-submenu__item">
                                <a href="{{ route('profile') }}" class="q-main-submenu__link">Профиль</a>
                            </li>
                            <li class="q-main-submenu__item">
                                <a href="{{ route('home') }}" class="q-main-submenu__link">Проекты</a>
                            </li>
                            <li class="q-main-submenu__item">
                                <a href="#" class="q-main-submenu__link">Баланс</a>
                            </li>
                            <li class="q-main-submenu__item">
                                <a href="{{ route('logout') }}" class="q-main-submenu__link">Выйти</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            {{--<ul class="q-main-menu">--}}
                {{--<li class="q-main-menu__item _dropdown _show-992">--}}
                    {{--<a href="#" class="q-main-menu__link">Мой профиль</a>--}}
                    {{--<ul class="q-main-submenu">--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Профиль</a>--}}
                        {{--</li>--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Мои проекты</a>--}}
                        {{--</li>--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Выйти</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="q-main-menu__item _dropdown">--}}
                    {{--<a href="#" class="q-main-menu__link">Проекты</a>--}}
                    {{--<ul class="q-main-submenu submenu-new-projekt">--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Проект 1</a>--}}
                        {{--</li>--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Проект 2</a>--}}
                        {{--</li>--}}
                        {{--<li class="q-main-submenu__item">--}}
                            {{--<a href="#" class="q-main-submenu__link">Проект 3</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        </div>
    </header>
@else
    <header class="q-header">
        <div class="q-inner">
            <a href="/" class="q-logo">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="q-logo__img">
            </a>
            <div class="q-mobile-burger js-toggle-mobile-menu">
                <span></span>
            </div>

            <ul class="q-main-menu">
                <li class="q-main-menu__item _dropdown">
                    <a href="#" class="q-main-menu__link">Вход/регистрация</a>
                    <ul class="q-main-submenu submenu-new-projekt">
                        <li class="q-main-submenu__item">
                            <a href="{{ route('login') }}" class="q-main-submenu__link">Войти</a>
                        </li>
                        <li class="q-main-submenu__item">
                            <a href="{{ route('register') }}" class="q-main-submenu__link">Зарегистрироваться</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </header>
@endif
