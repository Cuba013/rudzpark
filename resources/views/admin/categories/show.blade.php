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
                        <h3 class="me-3">{{ $category->title }}
                        </h3>
                        <a class="text-success me-3" href="{{ route('admin.categories.edit', $category->id) }}">
                            <i class="bi bi-pen"></i>
                        </a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
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
                                            <td>{{ $category->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Название категории</td>
                                            <td>{{ $category->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Описание категории</td>
                                            <td>{{ $category->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>Родительская категория</td>
                                            <td>
                                                @if ($category->parent)
                                                    {{ $category->parent->title }}
                                                @else
                                                    Эта категория не имеет родительской категории.
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        @if ($category->image)
                            <img class="w-25 mt-3" src="{{ asset('storage/' . $category->image) }}"
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
