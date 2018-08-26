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
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="tel-of-site-1">Телефон #1</label>
                        <input id="tel-of-site-1" type="text" class="form-control" name="tel1" value="{{ $option->tel1 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-2">Телефон #2</label>
                        <input id="tel-of-site-2" type="text" class="form-control" name="tel2" value="{{ $option->tel2 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-3">Телефон #3</label>
                        <input id="tel-of-site-3" type="text" class="form-control" name="tel3" value="{{ $option->tel3 }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="tel-of-site-4">Телефон #4</label>
                        <input id="tel-of-site-4" type="text" class="form-control" name="tel4" value="{{ $option->tel4 }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection

@push('scripts')

    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

    <script>

        tinymce.init({
            selector:'#description-of-site',
            height: 300,
            plugins: [
                "advlist autolink lists link image imagetools charmap print preview anchor paste",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            image_title: true,
            image_class_list: [
                {title: 'image-fluid', value: 'img-fluid'}
            ],
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            paste_data_images: true,
            // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: '/upload-image-tiny',
            // here we add custom filepicker only to Image dialog
            relative_urls: false,
            remove_script_host: false,
            // and here's our custom image picker
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.setAttribute('name', 'image');

                // Note: In modern browsers input[type="file"] is functional without
                // even adding it to the DOM, but that might not be the case in some older
                // or quirky browsers like IE, so you might want to add it to the DOM
                // just in case, and visually hide it. And do not forget do remove it
                // once you do not need it anymore.

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        // Note: Now we need to register the blob in TinyMCEs image blob
                        // registry. In the next release this part hopefully won't be
                        // necessary, as we are looking to handle it internally.
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // call the callback and populate the Title field with the file name
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }
        });

    </script>

@endpush