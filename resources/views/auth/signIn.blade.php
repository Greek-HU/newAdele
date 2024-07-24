@extends('layoute.app')
@section('content')
@error('message')
<div class="alert alert-warning">{{ $message }}</div>
@enderror
@if (session('error'))
<div class="alert alert-danger text-white">
  {{ session('error') }}
</div>  
@endif
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url(' {{ asset("img/logIn.jpeg") }}' )">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class=" shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Belépés</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="https://www.facebook.com/adele95.nails" target="_blank">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div><div class="col-2 text-center px-1">
                    <a class="btn btn-link px-3" href="https://www.instagram.com/adelenails_" target="_blank">
                        <i class="fa fa-instagram text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn px-3" href="https://www.tiktok.com/@adelenails">
                        <i class="fa-brands fa-tiktok text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" action="{{ route('login-post') }}" method="POST" class="text-start">
                @csrf
                  <div class="input-group input-group-outline my-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Jelszó">
                  </div>
                  <!--div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div-->
                  <div class="text-center">
                    <button type="submit" class="btn btn-color w-100 my-4 mb-2">Belépés</button>
                  </div>
                  <!--p class="mt-4 text-sm text-center">
                    Nem rendelkezik még fiókkal?
                    <a href="/sign-up" class="text-primary text-gradient font-weight-bold">Regisztráció</a>
                  </p-->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Greguss Károly</a>
                for a better web.
              </div>
            </div>
            <!--div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Greguss Károly</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div-->
          </div>
        </div>
      </footer>
    </div>
  </main>
@endsection