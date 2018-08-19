<ul class="nav flex-column border-right">
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/options') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/options') ? 'text-light' : 'text-dark' }}" href="{{ route('options') }}">Настройки</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/products') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/products') ? 'text-light' : 'text-dark' }}" href="{{ route('product.index') }}">Продукты</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/pizza') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/pizza') ? 'text-light' : 'text-dark' }}" href="{{ route('product.pizza') }}">Пицца</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/sushi') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/sushi') ? 'text-light' : 'text-dark' }}" href="{{ route('product.sushi') }}">Суши</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ Request::is('admin/user') ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ Request::is('admin/user') ? 'text-light' : 'text-dark' }}" href="{{ route('user.index') }}">Users</a>
    </li>
</ul>