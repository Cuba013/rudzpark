<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudzpark</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body>
    <div class="wrapper">
        <header class="pre-header">
            <div class="container">
                <div class="pre-header__inner">
                    <ul class="pre-header__left">
                        <li class="pre-header__item">
                            <a class="pre-header__link" href="#">
                                О компании
                            </a>
                        </li>
                        <li class="pre-header__item">
                            <a class="pre-header__link" href="#">
                                Вопрос-ответ
                            </a>
                        </li>
                        <li class="pre-header__item">
                            <a class="pre-header__link" href="#">
                                Новости
                            </a>
                        </li>
                    </ul>
                    <ul class="pre-header__right">
                        <li class="pre-header__item">
                            <a class="pre-header__link" href="#">
                                Войти
                            </a>
                        </li>
                        <li class="pre-header__item">
                            <a class="pre-header__link" href="#">
                                Регистрация
                                <img class="pre-header__img" src="{{ asset('images/user.svg') }}" alt="user">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="{{ url('/') }}">
                        <img class="header__logo-img" src="{{ asset('images/logo.svg') }}" alt="logo">
                        rudzpark
                    </a>
                    <form class="header__search">
                        <input class="header__search-input" type="text" placeholder="Поиск по каталогу">
                        <button class="header__search-btn" type="submit">
                            <img class="header__search-btn-img" src="{{ asset('images/search.svg') }}" alt="search">
                        </button>
                    </form>
                    <div class="header__group">
                        <a class="header__compare" href="#">
                            <img class="header__compare-img" src="{{ asset('images/compare.svg') }}" alt="compare">
                        </a>
                        <a class="header__like" href="#">
                            <img class="header__like-img" src="{{ asset('images/like.svg') }}" alt="like">
                        </a>
                    </div>
                    <a class="header__basket" href="#">
                        <img class="header__basket-img" src="{{ asset('images/basket.svg') }}" alt="basket">
                        <span class="header__basket-numb">$ 0.00</span>
                    </a>
                </div>

                <nav class="menu">
                    <button class="menu__btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="menu__list">
                        @foreach ($categories as $category)
                            @if (!$category->parent_id)
                                <li class="menu__item {{ $category->children->isNotEmpty() ? 'dropdown' : '' }}">
                                    <a class="menu__link"
                                        href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a>
                                    @if ($category->children->isNotEmpty())
                                        <ul class="submenu">
                                                @include('includes.nav', [
                                                    'categories' => $category->children,
                                                ])
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>

            </div>
        </header>

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer__top">
                    <a class="footer__top-logo" href="{{ url('/') }}">
                        <img class="footer__top-img" src="{{ asset('images/logo.svg') }}" alt="logo">
                        rudzpark
                    </a>
                    <ul class="footer__top-list">
                        @foreach ($categories as $category)
                            @if (!$category->parent_id)
                                <li class="footer__top-item">
                                    <a class="footer__top-link" href="{{ route('categories.show', $category->id) }}">
                                        {{ $category->title }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="footer__bottom">
                    <ul class="footer__bottom-list">
                        <li class="footer__bottom-item">
                            <a class="footer__bottom-link" href="#">
                                Политика конфиденциальности
                            </a>
                        </li>
                        <li class="footer__bottom-item">
                            <a class="footer__bottom-link" href="#">
                                О компании
                            </a>
                        </li>
                        <li class="footer__bottom-item">
                            <a class="footer__bottom-link" href="#">
                                Новости
                            </a>
                        </li>
                        <li class="footer__bottom-item">
                            <a class="footer__bottom-link" href="#">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <p class="footer__bottom-copyright">
                        Copyright © 2001-2023 RudzPark. All rights reserved
                    </p>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('js/main.min.js') }}"></script>
</body>

</html>
