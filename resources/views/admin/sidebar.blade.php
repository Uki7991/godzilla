<ul class="nav flex-column border-right">
    <li class="nav-item py-1 border-bottom {{ $typeOfView === 'options' ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ $typeOfView === 'options' ? 'text-light' : 'text-dark' }}" href="/admin?page=options">Настройки</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ $typeOfView === 'products' ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ $typeOfView === 'products' ? 'text-light' : 'text-dark' }}" href="/admin?page=products">Продукты</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ $typeOfView === 'pizza' ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ $typeOfView === 'pizza' ? 'text-light' : 'text-dark' }}" href="/admin?page=pizza">Пицца</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ $typeOfView === 'sushi' ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ $typeOfView === 'sushi' ? 'text-light' : 'text-dark' }}" href="/admin?page=sushi">Суши</a>
    </li>
    <li class="nav-item py-1 border-bottom {{ $typeOfView === 'users' ? 'bg-secondary' : '' }}">
        <a class="nav-link {{ $typeOfView === 'users' ? 'text-light' : 'text-dark' }}" href="/admin?page=users">Users</a>
    </li>
</ul>