@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-2 pl-0">
                @include('admin.sidebar')
            </div>

            <div class="col-10 py-3">
                @yield('admin_content')
            </div>

        </div>
    </div>

@endsection