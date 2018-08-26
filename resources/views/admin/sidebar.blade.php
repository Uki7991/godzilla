<ul class="nav flex-column border-right">
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/options') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/options') ? 'text-light' : 'text-dark' }}" href="{{ route('options') }}">Настройки</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/product') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/product') ? 'text-light' : 'text-dark' }}" href="{{ route('product.index') }}">Продукты</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/type') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/type') ? 'text-light' : 'text-dark' }}" href="{{ route('type.index') }}">Типы продуктов</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/user') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/user') ? 'text-light' : 'text-dark' }}" href="{{ route('user.index') }}">Users</a>
    </li>
</ul>