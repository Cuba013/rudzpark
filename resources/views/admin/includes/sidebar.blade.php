<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <ul
            class="nav sidebar-menu flex-column pt-3"
            data-lte-toggle="treeview"
            role="navigation"
            aria-label="Main navigation"
            data-accordion="false"
            id="navigation"
        >
            <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <i class="nav-icon bi bi-house-fill"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-fill"></i>
                    <p>Категории</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link">
                    <i class="nav-icon bi bi-box-seam-fill"></i>
                    <p>Товары</p>
                </a>
            </li>

        </ul>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
