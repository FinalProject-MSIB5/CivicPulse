@extends('Templates.index')
@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
    <div class="col">
        <div class="card border-primary border-bottom border-3 border-0">
            <img src="assets/images/gallery/01.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-primary">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-primary"><i class='bx bx-star'></i>Button</a>
                    <a href="javascript:;" class="btn btn-primary"><i class='bx bx-microphone' ></i>Button</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-danger border-bottom border-3 border-0">
            <img src="assets/images/gallery/02.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-danger">Detail Pengaduan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-danger"><i class='bx bx-star'></i>Button</a>
                    <a href="javascript:;" class="btn btn-danger"><i class='bx bx-microphone' ></i>Button</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection