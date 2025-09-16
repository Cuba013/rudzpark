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
                        <h3 class="mb-0">Редактирование категории</h3>
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
                        <form action="{{ route('admin.categories.update', $category->id) }}" method="post"
                            enctype="multipart/form-data" class="w-25">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label class="form-label">Название категории</label>
                                <input type="text" class="form-control" name="title" placeholder="Введите название"
                                    value="{{ $category->title }}">
                                @error('title')
                                    <div class="text-danger">Это поле необходимо для заполнения</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Описание категории</label>
                                <textarea class="form-control" name="description" placeholder="Введите описание">{{ $category->description }}</textarea>
                            </div>

                            <div class="input-group mb-3">
                                <label class="form-label w-100">Выбрать родительскую категорию</label>
                                <select name="parent_id" class="form-select" aria-label="Выберите категорию">
                                    <option value="">Выберите категорию</option>
                                    @foreach ($categories as $currentCategory)
                                        <option value="{{ $currentCategory->id }}"
                                            {{ $currentCategory->id == $category->parent_id ? ' selected' : '' }}>
                                            {{ $currentCategory->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($category->image)
                                <img class="w-25 mt-3" src="{{ asset('storage/' . $category->image) }}"
                                    alt="Изображение категории">
                            @else
                                <p class="mt-3">Картинка не загружена</p>
                            @endif

                            <div class="input-group mb-3">
                                <label class="form-label w-100">Добавить изображение</label>
                                <input type="file" name="image" class="form-control">
                                <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Обновить">
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
