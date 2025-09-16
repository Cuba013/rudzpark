@extends('admin.layouts.main')

@section('content')
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6 d-flex align-items-center justify-content-start">
                        <h3 class="me-3">{{ $product->title }}
                        </h3>
                        <a class="text-success me-3" href="{{ route('admin.products.edit', $product->id) }}">
                            <i class="bi bi-pen"></i>
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('destroy')
                            <button class="border-0 bg-transparent" type="submit">
                                <i class="bi bi-trash3 text-danger" role="button"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->

                    <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $product->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Название товара</td>
                                            <td>{{ $product->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Категории</td>
                                            <td>
                                                @if ($product->categories->isNotEmpty())
                                                    @foreach ($product->categories as $category)
                                                        <span class="btn btn-primary btn-sm">{{ $category->title }}</span>
                                                    @endforeach
                                                @else
                                                    Нет категории
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Цена</td>
                                            <td>{{ $product->price }} BYN</td>
                                        </tr>
                                        <tr>
                                            <td>Рейтинг</td>
                                            <td>{{ $product->rating }}</td>
                                        </tr>
                                        <tr>
                                            <td>Товар в наличии</td>
                                            <td>{{ $product->available }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        @if ($product->image)
                            <img class="w-25 mt-3" src="{{ asset('storage/' . $product->image) }}"
                                alt="Изображение категории">
                        @else
                            <p class="mt-3">Картинка не загружена</p>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
