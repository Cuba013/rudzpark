@if ($products->isEmpty())
    <p>Нет доступных товаров для отображения.</p>
@else
    <div id="products" class="owl-carousel owl-theme">
        @foreach ($products as $product)
            <div class="products__item">
                <a class="products__item-product" href="{{ route('products.show', $product->id) }}">
                    <img class="products__item-img" src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->title }}">
                    <div class="products__item-stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $product->rating)
                                <svg class="products__item-svg--cool" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            @else
                                <svg class="products__item-svg" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            @endif
                        @endfor
                    </div>
                    @if ($product->available == 1)
                        <div class="products__item-check">
                            <img class="products__owl-check-img" src="images/check.svg" alt="check">
                            <p>в наличии</p>
                        </div>
                    @else
                        <div class="products__item-check">
                            <img class="products__owl-check-img" src="images/check-no.svg" alt="check">
                            <p>нет товара</p>
                        </div>
                    @endif
                    <h4 class="products__item-title">{{ $product->title }}</h4>
                    <p class="products__item-price">{{ $product->price }} byn</p>
                    <a class="products__item-link" href="#">Купить</a>
                    <div class="products__item-group">
                        <a class="products__item-icon" href="#">
                            <svg class="products__item-compare" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24">
                                <path class="st0"
                                    d="M1.3,22.7H24V24H0V0h1.3V22.7z M6.3,10.1h1.3v8.8H6.3C6.3,18.9,6.3,10.1,6.3,10.1z M12.6,5.1h1.3v13.9h-1.3C12.6,18.9,12.6,5.1,12.6,5.1z M18.9,0h1.3v18.9h-1.3V0z" />
                            </svg>
                        </a>
                        <a class="products__item-icon" href="#">
                            <svg class="products__item-like" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.2 24">
                                <path class="st0"
                                    d="M6.9,0.1C3.6,0.5,0.9,3,0.1,6.2C0,7,0,8.5,0.1,9.4c0.4,1.9,1.5,4.1,3.2,6.2c0.7,0.8,3,3.2,4,4c1.9,1.6,4,3,6,4c0.4,0.2,0.7,0.4,0.9,0.4c0.3,0,2.1-1,3.8-2.1c2-1.3,3.4-2.5,5.2-4.3c0.7-0.7,1.5-1.6,1.8-2c1.7-2.1,2.8-4.3,3.2-6.2c0.2-0.8,0.2-2.4,0-3.2c-0.6-2.7-2.6-4.9-5.2-5.8c-0.8-0.3-1.4-0.4-2.3-0.4c-2.2-0.1-4.3,0.7-5.9,2.2l-0.6,0.5l-0.6-0.5C11.8,0.5,9.4-0.2,6.9,0.1z M9.6,1.6c1.5,0.4,2.8,1.3,3.7,2.5c0.4,0.5,0.4,0.6,0.8,0.6s0.4-0.1,0.8-0.6c0.9-1.2,2.2-2.1,3.7-2.5c0.5-0.1,0.7-0.2,1.6-0.2c0.9,0,1.1,0,1.6,0.2c2.5,0.7,4.3,2.6,4.9,5c0.2,0.7,0.2,1.9,0,2.6c-0.3,1.6-1.1,3.2-2.3,4.8c-1.7,2.2-4.3,4.7-7,6.6c-0.8,0.6-2.2,1.4-2.9,1.8l-0.4,0.2l-0.4-0.2c-0.6-0.3-2-1.2-2.8-1.7c-2.8-1.9-5.4-4.3-7.1-6.6c-1.2-1.6-2-3.2-2.3-4.8c-0.2-0.8-0.2-2,0-2.8c0.6-2.6,2.8-4.6,5.5-5C7.7,1.3,8.9,1.4,9.6,1.6z" />
                            </svg>
                        </a>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
@endif
