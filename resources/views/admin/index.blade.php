@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-2 pl-0">
                @include('admin.sidebar')
            </div>

            <div class="col-10 py-3">
                {{--@includeWhen($typeOfView === 'options', 'product.test', ['products' => 'products'])--}}
                {{--@includeWhen($typeOfView === 'products', 'product.test1', ['products' => 'products'])--}}
                {{--@includeWhen($typeOfView === 'pizza', 'product.test2', ['products' => 'products'])--}}
                {{--@includeWhen($typeOfView === 'sushi', 'product.test3', ['products' => 'products'])--}}
                {{--@includeWhen($typeOfView === 'users', 'product.users', ['users' => $users])--}}
                @yield('admin_content')
            </div>

        </div>
    </div>

@endsection