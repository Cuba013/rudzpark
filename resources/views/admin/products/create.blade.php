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
                        <h3 class="mb-0">Добавление товара</h3>
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
                    <div class="col-12">
                        <form
                            action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}"
                            method="post" enctype="multipart/form-data" class="w-25">
                            @csrf
                            @isset($product)
                                @method('PUT')
                            @endisset
                            <div class="mb-3">
                                <label class="form-label">Название товара</label>
                                <input type="text" class="form-control" name="title" placeholder="Введите название"
                                    required>
                                @error('title')
                                    <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Цена товара</label>
                                <input type="text" class="form-control" name="price" placeholder="Введите цену">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Рейтинг товара</label>
                                <input type="text" class="form-control" name="rating" placeholder="Введите рейтинг">
                            </div>
                            
                            <div class="mb-3 w-100">
                                <label for="categories">Категории</label>
                                <select class="select2 w-100" name="categories[]" id="categories" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ isset($product) && $product->categories->contains($category->id) ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <label class="form-label w-100">Добавить изображение</label>
                                <input type="file" name="image" class="form-control">
                                <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="available" id="available"
                                    value="1" {{ old('available') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Товар в наличии
                                </label>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
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
