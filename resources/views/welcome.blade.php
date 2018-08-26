@extends('layouts.app')

@section('content')

    @isset($option)

        @include('_partials._big_banner')

    @endisset

    @foreach($types as $type)

        @if(count($type->products) > 0)

            <div id="pizza" class="container py-4">
                <div class="row justify-content-center">
                    <h2 class="text-capitalize">{{ $type->name }}</h2>
                </div>

                <div class="row">

                    @foreach($type->products as $product)

                        <div class="col-3 my-2">
                            <div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">
                                <div class="card-body text-center">
                                    <img src="{{ asset('uploads/'.$product->image) }}" class="img-fluid mb-3" alt="">
                                    <h3 class="text-capitalize">{{ $product->name }}</h3>
                                    <p>{{ $product->description }}</p>
                                    <div class="d-flex align-items-end justify-content-around">
                                        <p>Цена:</p>
                                        <p><span class="h4 font-weight-bold text-success">{{ $product->price }}</span> сом</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>

        @endif

    @endforeach

    {{--<div id="sushi" class="container py-4">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<h2 class="text-capitalize">суши</h2>--}}
        {{--</div>--}}

        {{--<div class="row">--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-3 my-2">--}}
                {{--<div class="card border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">--}}
                    {{--<div class="card-body text-center">--}}
                        {{--<img src="/images/sushi-transparent.png" class="img-fluid mb-3" alt="">--}}
                        {{--<h3 class="text-capitalize">калифорния</h3>--}}
                        {{--<p>Снежный краб, тобика</p>--}}
                        {{--<div class="d-flex align-items-end justify-content-around">--}}
                            {{--<p>Цена:</p>--}}
                            {{--<p><span class="h4 font-weight-bold text-success">500</span> сом</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

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