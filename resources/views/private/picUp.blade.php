@extends('layoute.private')
@extends('partials.privateNavBar')

@section('content')
@if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
<div class="box pb-4">
    <div class="text box_color">
        <div class="text-center form_box">
            <h1>Képfeltöltő űrlap</h1>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <form method="post" enctype="multipart/form-data" action="storeImage">
                @csrf
                <div>
                    <input type="file" name="pictureURL" accept="image/*">
                </div>
                <div>
                    <label for="cim">Cím:</label>
                    <input class="rounded text-center" type="text" name="title">
                </div>
                <div class="fomr_btn">
                    <input class="btn btn-dark" type="submit" value="Feltöltés" name="upload_button">
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="gallery col-12 col-md-8">
                    @if($pictures != null)
                    @foreach ($pictures as $picture)
                    <div class="gallery__column">
                        <div class="gallery__link">
                            <figure class="gallery__thumb">
                                <img src="{{$picture->imgPlace}}" alt="{{$picture->title}}" height="250" class="gallery__image rounded" data-id="{{$picture->id}}">
                                <figcaption class="gallery__caption">{{$picture->title}}</figcaption>
                            </figure>
                            <!-- Modal Button -->
                            <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success editbtn" value="{{$picture->id}}">Szerkesztés</button>
                                    <button type="button" class="btn btn-danger ms-2 delbtn" value="{{$picture->id}}">Törlés</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @endif
                </div>
            </div>
        </div>
        @include('private.editImg')
        @include('private.xmodal')
    </div>
</div>
</div>

@endsection
@section('scripts')
<script>
   
    $(document).ready(function () {
        $(document).on('click', '.editbtn', function(){
            var img_id = $(this).val();
            $('#editImg').modal('show');

            $.ajax({
                type: "GET",
                url: "/editPic/"+img_id,
                success: function(response){
                    $('#editedImg').attr('src', response.picture.imgPlace);
                    $('#editedImgTitle').val(response.picture.title);
                    $('#img_id').val(img_id);
                }
            });
        });
    });
    $(document).ready(function () {
        $(document).on('click', '.delbtn', function(){
            var delimg_id = $(this).val();
            $('#xModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/quest/"+delimg_id,
                success: function(response){
                    $('#deletedImg').attr('src', response.picture.imgPlace);
                    $('#deletedImgTitle').text(response.picture.title);
                    $('#delimg_id').val(delimg_id);
                }
            });
        });
    });
    $(document).ready(function () {
        $(document).on('click', '.newBoxBtn', function(){
            $('#addBox').modal('show');

            $.ajax({
                type: "GET",
                url: "/addBox",
                success: function(response){
                    //$('#newNailType').val(response.nailType.type);
                    console.log(nailType);
                }
            });
        });
    });
</script>
@endsection