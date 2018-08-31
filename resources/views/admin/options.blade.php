@extends('admin.index')

@section('admin_content')

    <div class="mt-3 row justify-content-center">
        <div class="col-8">
            <form action="{{ route('option.update', 1) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name-of-site">Название сайта</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name-of-site" placeholder="Название сайта" value="{{ old('name') ? old('name') : $option->name }}">
                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-5">
                    <img src="{{ asset('uploads/'.$option->logo) }}" class="img-fluid" alt="">
                </div>
                <div class="form-group">
                    <label for="logo-of-site">Логотип</label>
                    <input name="logo" type="file" class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}" id="logo-of-site" placeholder="Логотип">
                    @if($errors->has('logo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('logo') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description-of-site">Ключевые слова</label>
                    <textarea class="form-control {{ $errors->has('keys') ? ' is-invalid' : '' }}" name="keys" id="description-of-site">{{ old('keys') ? old('keys') : $option->keys }}</textarea>
                    @if($errors->has('keys'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('keys') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description-of-site">Информация о себе</label>
                    <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description-of-site">{{ old('description') ? old('description') : $option->description }}</textarea>
                    @if($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email-for-site">E-mail</label>
                    <input name="email" type="email" id="email-for-site" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') ? old('email') : $option->email }}">
                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="tel-of-site-1">Телефон #1</label>
                        <input id="tel-of-site-1" type="text" class="form-control {{ $errors->has('tel1') ? ' is-invalid' : '' }}" name="tel1" value="{{ old('tel1') ? old('tel1') : $option->tel1 }}">
                        @if($errors->has('tel1'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tel1') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-2">Телефон #2</label>
                        <input id="tel-of-site-2" type="text" class="form-control {{ $errors->has('tel2') ? ' is-invalid' : '' }}" name="tel2" value="{{ old('tel2') ? old('tel2') : $option->tel2 }}">
                        @if($errors->has('tel2'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tel2') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-3">Телефон #3</label>
                        <input id="tel-of-site-3" type="text" class="form-control {{ $errors->has('tel3') ? ' is-invalid' : '' }}" name="tel3" value="{{ old('tel3') ? old('tel3') : $option->tel3 }}">
                        @if($errors->has('tel3'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tel3') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-4">Телефон #4</label>
                        <input id="tel-of-site-4" type="text" class="form-control {{ $errors->has('tel4') ? ' is-invalid' : '' }}" name="tel4" value="{{ old('tel4') ? old('tel4') : $option->tel4 }}">
                        @if($errors->has('tel4'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tel4') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-5">
                    <img src="{{ asset('uploads/'.$option->banner_image) }}" class="img-fluid" alt="">
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="action-for-banner">Продающий текст</label>
                        <input name="banner_action" class="form-control {{ $errors->has('banner_action') ? ' is-invalid' : '' }}" type="text" id="action-for-banner" value="{{ old('banner_action') ? old('banner_action') : $option->banner_action }}">
                        @if($errors->has('banner_action'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('banner_action') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="image-for-banner">Картинка</label>
                        <input name="banner_image" class="form-control {{ $errors->has('banner_image') ? ' is-invalid' : '' }}" id="image-for-banner" type="file">
                        @if($errors->has('banner_image'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('banner_image') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="instagram-of-site">Instagram</label>
                        <input type="text" class="form-control {{ $errors->has('instagram') ? ' is-invalid' : '' }}" id="instagram-of-site" name="instagram" value="{{ old('instagram') ? old('instagram') : $option->instagram }}">
                        @if($errors->has('instagram'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('instagram') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="whatsapp-for-site">Whatsapp</label>
                        <input type="text" class="form-control {{ $errors->has('whatsapp') ? ' is-invalid' : '' }}logo" id="whatsapp-for-site" name="whatsapp" value="{{ old('whatsapp') ? old('whatsapp') : $option->whatsapp }}">
                        @if($errors->has('whatsapp'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('whatsapp') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>

@endsection