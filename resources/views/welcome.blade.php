@extends('layouts.app')

@section('content')

    @if($option->banner_action && $option->banner_image)

        @include('_partials._big_banner')

    @endif

    @foreach($types as $type)

        @if(count($type->products) > 0)

            <div id="{{ $type->slug }}" class="container py-2 py-md-4">
                <div class="row justify-content-center">
                    <h2 class="text-capitalize section-h2 font-weight-bold w-100"><span>{{ $type->name }}</span></h2>
                </div>

                <div class="row justify-content-center">

                    @foreach($type->products as $product)

                        @include('product._list')

                    @endforeach
                </div>
            </div>

        @endif

    @endforeach

@endsection

@push('scripts')

    <script type="application/javascript">
        $('.card-product').hover(
            function (e) {
                $(this).addClass('shadow-lg');
            },
            function (e) {
                $(this).removeClass('shadow-lg');
            }
        );
    </script>

@endpush