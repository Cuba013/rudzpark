@extends('layouts.main')

@section('content')
<main class="main">

    <section class="catalog">
        
    </section>

    <section class="products">
        <div class="container">
            <div class="products__group">
                <h2 class="products__group-title">
                    {{ $product->title }}
                </h2>
            </div>

        </div>
    </section>
</main>

@endsection
