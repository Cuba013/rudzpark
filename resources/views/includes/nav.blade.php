@foreach ($category->children as $child)
    <li class="submenu__item">
        <a href="{{ route('categories.show', $child->id) }}" class="submenu__link">
            {{ $child->title }}
        </a>

        @if ($child->children->isNotEmpty())
            <ul class="submenu">
                @foreach ($child->children as $subchild)
                    <li class="submenu__item">
                        <a href="{{ route('categories.show', $subchild->id) }}" class="submenu__link">
                            {{ $subchild->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

    </li>
@endforeach
