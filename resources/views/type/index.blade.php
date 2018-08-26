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
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush