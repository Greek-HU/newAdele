<section class="u-align-center u-clearfix u-palette-4-base u-section-4" id="carousel_277c">
  <div class="u-clearfix u-sheet u-sheet-1" id="nail">
    <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Körmös szolgáltatások </h2>
    <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">21 naptól vagy a szett előkészítését követően 30%-osnál hiányosabb pilla esetén építési ára kerül felszámításra!<br>Az árak 2024.03.01-től érvényesek!
    </p>
    <div class="container">
    <div class="d-table m-auto mt-5">
      <div class="d-flex text-center p-3 table-box">
        @foreach($nailTypes as $Types)
        <div class="col">
          <table class="card " style="width: 18rem;">
            <img src="{{$Types->img_place}}" class="card-img-top u-image u-image-circle u-image-1" alt="{{$Types->type}}">
            <thead class="d-flex justify-content-center">
              <tr>
                <th></th>
                <th class="card-title">{{$Types->type}}</th>
              </tr>
            </thead>
            @foreach($Types->sizes as $Size)
              @if($Size->size)
                <tbody class="shadow p-4 bg-body-primery rounded-bottom d-flex justify-content-center">
                  <tr class="u-align-center">
                    <td class="u-align-left u-text u-text-palette-4-base px-4">{{$Size->size}} - {{$Size->amount}}</td>

                  </tr>
                </tbody>
                @else
                @foreach($Types->opps as $Opp)

                <tbody class="shadow p-4 bg-body-primery rounded-bottom d-flex justify-content-center">
                  <tr class="u-align-center">
                    <td class="u-align-left u-text u-text-palette-4-base px-4">{{$Opp->option}} - {{$Size->amount}}</td>
                  </tr>
                </tbody>
                @endforeach
              @endif
            @endforeach
              
            </div>
          </table>
        </div>
        @endforeach
      </div>
    </div>
    </div>
    <!--
@foreach($nailTypes as $Types)
        <div class="col">
          <table class="card " style="width: 18rem;">
            <img src="{{$Types->pic_place}}" class="card-img-top u-image u-image-circle u-image-1" alt="...">
            <thead class="d-flex justify-content-center">
              <tr>
                <th></th>
                <th class="card-title">{{$Types->type}}</th>
              </tr>
            </thead>
              @foreach($Types->opps as $Opp)
              <tbody class="shadow p-4 bg-body-primery rounded-bottom d-flex justify-content-center">
                <tr class="u-align-center">
                  <td class="u-align-left u-text u-text-palette-4-base px-4">{{$Opp->option}}</td>
                
                </tr>
                
              </tbody>
              @endforeach
            </div>
          </table>
        </div>
        @endforeach
      -->
    <a href="#" class="fixedbutton">
      <i class="bi bi-arrow-up-circle-fill " id="fixedbutton"></i>
    </a>
</section>