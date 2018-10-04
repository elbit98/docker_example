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