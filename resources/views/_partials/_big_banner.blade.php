<div class="container-fluid">
    <div class="row background-image align-items-center h-85-vh position-relative text-light" style="background-image: url('{{ asset('uploads/'.$option->banner_image) }}');">
        <div class="backdrop"></div>
        <div class="col-auto position-relative">
            <h1 class="d-none d-md-block display-2 font-weight-bold">{!! $option->banner_action !!}</h1>
            <h1 class="d-md-none font-weight-bold">{!! $option->banner_action !!}</h1>
        </div>
    </div>
</div>