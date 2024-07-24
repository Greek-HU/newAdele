@extends('layoute.signUp')
@section('content')
<main class="main-content  mt-0">
  <section>
    <div class="page-header min-vh-100" style="background-color: antiquewhite">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(' {{ asset("img/signUp.jpeg") }}' ); background-size: cover;">
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="font-weight-bolder">Regisztráció</h4>
              </div>
              <div class="card-body">
                <form role="form" action="/store" method="post">
                  @csrf
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="text" class="form-control" name="name" placeholder="Név">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="password" class="form-control" name="password" placeholder="Jelszó">
                  </div>
                  <!--div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        Megértettem a <a href="javascript:;" class="text-dark font-weight-bolder">Feltételeket</a>
                      </label>
                    </div-->
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-color btn-lg w-100 mt-4 mb-0">Regisztráció</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-2 text-sm mx-auto">
                  Már rendelkezik fiókkal?
                  <a href="/sign-in" class="text-primary text-gradient font-weight-bold">Belépés</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection