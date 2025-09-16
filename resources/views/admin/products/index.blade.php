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
                    <div class="col-sm-6">
                        <h3 class="mb-0">Товары</h3>
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
                    <div class="col-12 mb-4">
                        <a class="btn btn-primary mb-2" href="{{ route('admin.products.create') }}">Добавить
                            товар</a>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Категории</th>
                                            <th>Изображение</th>
                                            <th>Цена</th>
                                            <th>Рейтинг</th>
                                            <th>Наличие</th>
                                            <th colspan="3">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>
                                                    @if ($product->categories->isNotEmpty())
                                                        @foreach ($product->categories as $category)
                                                           <span class="btn btn-primary btn-sm">{{ $category->title }}</span>
                                                        @endforeach
                                                    @else
                                                        Нет категории
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($product->image)
                                                        <img class="" src="{{ asset('storage/' . $product->image) }}"
                                                            width="100">
                                                    @else
                                                        Изображение не загружено
                                                    @endif
                                                </td>
                                                <td>{{ $product->price }} BYN</td>
                                                <td>{{ $product->rating }}</td>
                                                <td>{{ $product->available ? 'Да' : 'Нет' }}</td>

                                                <td><a href="{{ route('admin.products.show', $product->id) }}"><i
                                                            class="bi bi-eye"></i></a></td>
                                                <td><a class="text-success"
                                                        href="{{ route('admin.products.edit', $product->id) }}"><i
                                                            class="bi bi-pen"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.products.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="border-0 bg-transparent" type="submit">
                                                            <i class="bi bi-trash3 text-danger" role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
