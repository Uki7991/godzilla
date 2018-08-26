@extends('admin.index')

@section('admin_content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Обновление продукта</h1>
            <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name-of-product">Название</label>
                    <input name="name" type="text" class="form-control" id="name-of-product" placeholder="Название" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="description-of-product">Описание</label>
                    <textarea class="form-control" name="description" id="description-of-product">{{ $product->description }}</textarea>
                </div>
                <div class="col-4">
                    <img src="{{ asset('uploads/'.$product->image) }}" class="img-fluid" alt="">
                </div>
                <div class="form-group">
                    <label for="image-of-product">Картинка продукта</label>
                    <input name="image" type="file" id="image-of-product" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="type-of-product">Категория продукта</label>
                        <select name="type_id" id="type-of-product" class="form-control">
                            <option disabled>Выберите категорию...</option>
                            @foreach($types as $type)

                                <option value="{{ $type->id }}" {{ $product->type->id === $type->id ? 'selected' : '' }}>{{ $type->name }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="price-of-product">Цена</label>
                        <input name="price" type="text" class="form-control" value="{{ $product->price }}" id="price-of-product" placeholder="Цена">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection
