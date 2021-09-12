<footer class="footer">

    <a href="{{ route('home') }}" class="footer__logo logo">
        <img src="{{ url('public/assets/img/logo.jpg')  }}" alt="" class="logo__image">
    </a>

    <nav class="footer__menu menu">
        <ul class="menu__list">

            <li class="menu__item">
                <a href=" {{ route('home') }} " class="menu__link"> Home </a>
            </li>

            @auth()
            <li class="menu__item">
                <a href=" {{ route('logout') }} " class="menu__link"> Logout </a>

            </li>
            @endauth

            @guest()
            <li class="menu__item">
                <a href=" {{ route('login-form') }} " class="menu__link"> Login </a>
            </li>
            <li class="menu__item">
                <a href=" {{ route('register-form') }} " class="menu__link"> Register </a>
            </li>
            @endguest

        </ul>
    </nav>

    <div class="footer__copyright copyright">
        All rights reserved 2020-2021 &copy;
    </div>

</footer>
