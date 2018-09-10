@extends('admin.index')

@section('admin_content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Создание продукта</h1>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name-of-product">Название</label>
                    <input maxlength="25" name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="name-of-product" placeholder="Название">
                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description-of-product">Описание</label>
                    <textarea maxlength="80" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description-of-product">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="image-of-product">Картинка продукта</label>
                    <input name="image" type="file" id="image-of-product" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}">
                    <input type="hidden" value="1" name="edit">
                    @if($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="type-of-product">Категория продукта</label>
                        <select name="type_id" id="type-of-product" class="form-control {{ $errors->has('type_id') ? ' is-invalid' : '' }}">
                            <option disabled {{ old('type_id') ? '' : 'selected' }}>Выберите категорию...</option>
                            @foreach($types as $type)

                                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>

                            @endforeach
                        </select>
                        @if($errors->has('type_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="price-of-product">Цена</label>
                        <input name="price" type="text" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" id="price-of-product" placeholder="Цена" value="{{ old('price') }}">
                        @if($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
