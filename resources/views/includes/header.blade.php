<header class="header">

    <a href="{{ route('home') }}" class="header__logo logo">
        <img src="{{ url('public/assets/img/logo.jpg')  }}" alt="" class="logo__image">
    </a>

    <nav class="header__menu menu">
        <ul class="menu__list">

            <li class="menu__item">
                <a href=" {{ route('home') }} " class="menu__link"> Home </a>
            </li>
            @auth()
            <li class="menu__item">
                <a href=" {{ route('logout') }} " class="menu__link"> Logout </a>
            </li>
            <li class="menu__item menu__item_upload">
                <label class="menu__link">
                    <input type="file" style="display: none">
                    Upload
                </label>
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

</header>
