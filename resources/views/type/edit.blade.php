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
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name-of-type" placeholder="Название" value="{{ $type->name }}">
                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="order-of-product">Порядок</label>
                    <input name="order" type="text" class="form-control {{ $errors->has('order') ? ' is-invalid' : '' }}" id="order-of-type" placeholder="Порядок" value="{{ $type->order }}">
                    @if($errors->has('order'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('order') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
