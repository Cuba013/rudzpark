@extends('layouts.main')

@section('content')
    <main class="main">
        <section class="offer">
            <div class="container">
                <div class="offer__inner">
                    <h1 class="offer__title">Добро пожаловать на наш сайт!</h1>
                    <p class="offer__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                        sollicitudin elementum neque id pharetra. Etiam ultricies neque et diam dignissim placerat.
                    </p>
                    <a class="offer__link" href="#">Перейти в каталог</a>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <div class="features__list">
                    <div class="features__item">
                        <h4 class="features__item-title">Лучшие в своем деле</h4>
                        <p class="features__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum sollicitudin elementum neque id pharetra.</p>
                    </div>
                    <div class="features__item">
                        <h4 class="features__item-title">Гарантия качества</h4>
                        <p class="features__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum sollicitudin elementum neque id pharetra.</p>
                    </div>
                    <div class="features__item">
                        <h4 class="features__item-title">Быстрая доставка</h4>
                        <p class="features__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum sollicitudin elementum neque id pharetra.</p>
                    </div>
                    <div class="features__item">
                        <h4 class="features__item-title">Поддержка 24/7</h4>
                        <p class="features__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum sollicitudin elementum neque id pharetra.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <div id="carousel" class="owl-carousel owl-theme">
                    @foreach ($categories as $category)
                        @if ($category->image)
                            <div class="item" style="background-image: url({{ asset('storage/' . $category->image) }})">
                                <div class="catalog__box">
                                    <h2 class="catalog__box-title">{{ $category->title }}</h2>
                                    <p class="catalog__box-text">{{ $category->description }}</p>
                                    <a class="catalog__box-link"
                                        href="{{ route('categories.show', $category->id) }}">Перейти в каталог</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="products__group">
                    <h2 class="products__group-title">
                        Популярные товары
                    </h2>
                    <a class="products__group-link" href="#">
                        Перейти в каталог
                    </a>
                </div>

                @include('includes.slider', ['products' => $products])

            </div>
        </section>

        <section class="subscription">
            <p class="subscription__text">Подписаться на рассылку новостей</p>
            <form class="subscription__form" action="">
                <input class="subscription__form-input" placeholder="Ваш e-mail" type="email">
                <button class="subscription__form-btn" type="submit">
                    Отправить
                </button>
            </form>
        </section>
    </main>
@endsection
