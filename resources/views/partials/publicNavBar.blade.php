@section('publicNavBar')
<div class="navbar">
    <div class="logo">
        <img src="{{ asset('img/logo.jpg') }}" class="logo justify-content-start" alt="Körmös logó">
    </div>

    <div class="nav_links">

        <a href="/" class="fst_pg">Kezdőlap</a>
        <a href="nails">Körmök</a>
        <a href="eyelashes">Pillák</a>
        <a href="gallery" class="gall_on">Galéria</a>

    </div>

    <div class="justify-content-end social_links">
        <div class="row">
            <div class="links">
                <div class="text-center ms-auto">
                    <a class="btn btn-link text-white px-3" href="https://www.facebook.com/adele95.nails" style="background-color: #3b5998;" target="_blank" role="button">
                        <i class="fa fa-facebook text-lg"></i>
                    </a>
                </div>
                <div class="text-center px-1">
                    <a class="btn btn-link text-white px-3" href="https://www.instagram.com/adelenails_" style="background-color: #55acee;" target="_blank">
                        <i class="fa fa-instagram text-lg"></i>
                    </a>
                </div>
                <div class="text-center me-auto">
                    <a class="btn text-white px-3" href="https://www.tiktok.com/@adelenails" style="background-color: #ac2bac;" target="_blank">
                        <i class="fa-brands fa-tiktok text-lg"></i>
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="contact" class="contact">Elérhetőség</a>
            </div>
        </div>
    </div>


    <a href="javascript:void(0);" class="nav-dropdown text-center mobil_navbar" >
        <i class="fa fa-bars"></i>
    </a>
</div>
@endsection