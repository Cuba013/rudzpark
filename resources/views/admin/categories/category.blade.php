<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->title }}</td>
    <td><a href="{{ route('admin.categories.show', $category->id) }}"><i class="bi bi-eye"></i></a></td>
    <td><a class="text-success" href="{{ route('admin.categories.edit', $category->id) }}"><i class="bi bi-pen"></i></a>
    </td>
    <td>
        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
            @csrf
            @method('delete')
            <button class="border-0 bg-transparent" type="submit">
                <i class="bi bi-trash3 text-danger" role="button"></i>
            </button>
        </form>
    </td>
</tr>

@if ($category->children->isNotEmpty())
    @foreach ($category->children as $child)
        @include('admin.categories.category', ['category' => $child])
    @endforeach
@endif
