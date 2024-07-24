@extends('layoute.public')
@extends('public.publicNavBar')
@section('content')
<div class="d-flex justify-content-center">
    <div class="op_img">
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="gallery col-12 col-md-8">
            @foreach ($pictures as $picture)
            <div class="gallery__column">
                <div class="gallery__link">
                    <figure class="gallery__thumb">
                        <img src="{{$picture->imgPlace}}" onclick="img_box(this)" alt="Portrait by Jessica Felicio" height="250" class="gallery__image">
                        <figcaption class="gallery__caption">{{$picture->title}}</figcaption>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection