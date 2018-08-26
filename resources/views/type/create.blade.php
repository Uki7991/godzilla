@extends('admin.index')

@section('admin_content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Создание типа продукта</h1>
            <form action="{{ route('type.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name-of-type">Название</label>
                    <input name="name" type="text" class="form-control" id="name-of-type" placeholder="Название">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
