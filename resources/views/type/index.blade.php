@extends('admin.index')

@section('admin_content')

    <div class="row mb-4 justify-content-end">
        <div class="col-auto">
            @include('admin.create_button', [
                'route' => route('type.create'),
                'color' => 'success',
                'text' => 'Новый тип продукта'
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered" id="types-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    @include('_partials._delete_modal')

@endsection

@push('stylesheets')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

@endpush

@push('scripts')
    <script>
        $(function() {
            $('#types-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatable.gettypes') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'order', name: 'order' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>

    <script>
        $(function () {
            $('#delete-confirmation').on('show.bs.modal', function (e) {
                var id = $(e.relatedTarget).attr('data-id');
                $(this).find('form#delete-form').attr('action', '/admin/type/' + id);
                $(this).find('.modal-body')[0].innerHTML = 'Вы точно хотите удалить?<br>Это удалит и все связанные с типом продукты!'
            })
        });
    </script>
@endpush