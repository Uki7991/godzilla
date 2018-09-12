<div class="col-12 col-sm-12 col-md-6 col-lg-3 my-1 my-md-2">
    <div class="card shadow-sm border-bottom  border-top-0 border-left-0 border-right-0 transition-500 card-product bg-light">
        <div class="card-body p-2 text-center">
            <img src="{{ asset('uploads/'.$product->image) }}" class="img-fluid mb-1 mb-md-3 image_of_product" alt="">
            <h4 class="text-capitalize {{ $product->description ? '' : 'mb-3' }}">{{ $product->name }}</h3>
            @if($product->description)
                <p class="description_of_product">{{ $product->description }}</p>
            @endif
            <div class="d-flex align-items-end justify-content-around">
                <p>Цена:</p>
                <p><span class="h4 font-weight-bold text-success">{{ $product->price }}</span> сом</p>
            </div>
        </div>
    </div>
</div>