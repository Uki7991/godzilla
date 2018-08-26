@extends('admin.index')

@section('admin_content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Обновление типа продукта</h1>
            <form action="{{ route('type.update', $type->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name-of-product">Название</label>
                    <input name="name" type="text" class="form-control" id="name-of-type" placeholder="Название" value="{{ $type->name }}">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
