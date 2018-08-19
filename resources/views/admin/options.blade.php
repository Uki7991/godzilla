@extends('admin.index')

@section('admin_content')

    <div class="row justify-content-end">
        <div class="col-auto mr-5">
            <a href="" class="btn btn-success">Сохранить</a>
        </div>
    </div>
    <div class="mt-3 row justify-content-center">
        <div class="col-8">
            <form>
                <div class="form-group">
                    <label for="name-of-site">Название сайта</label>
                    <input type="text" class="form-control" id="name-of-site" placeholder="Название сайта">
                </div>
                <div class="form-group">
                    <label for="logo-of-site">Логотип</label>
                    <input type="file" class="form-control" id="logo-of-site" placeholder="Логотип">
                </div>
                <div class="form-group">
                    <label for="description-of-site">Информация о себе</label>
                    <textarea class="form-control" name="content" id="description-of-site"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection

@push('scripts')

    <script>
        ClassicEditor
            .create( document.querySelector( '#description-of-site' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endpush