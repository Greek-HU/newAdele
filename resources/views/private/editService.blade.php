@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')

<div id="service" class="services_box">

    <h2 class="">Szolgáltatásaim</h2>
    <!--div>
        <span>Válasszon betütípust:</span>
        <button class="Permanent">Permanent</button>
        <button class="Poppins">Poppins</button>
        <button class="Playfair">Playfair</button>
        <button class="Lobster">Lobster</button>
    </div-->

    <div class="d-table m-auto mt-5">
        <div class="d-flex justify-content-end ">
            <button type="button" class="btn btn-primary newBoxBtn">Új elem hozzáadása</button>
        </div>
        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="d-flex text-center p-3 table-box">
            @if ( !empty($nailTypes) )
            @foreach ($nailTypes as $nailType)
            <form action="updateType={{ $nailType->id }}" method="post">
                @csrf
                @method('PUT')
                <table class="card">
                    <thead class="d-flex justify-content-center">
                        <tr>
                            <th class="p-4 nailType">
                                {{ $nailType->type }}
                                <a href="{{$nailType->id}}" class="bi bi-pencil px-2 text-black showTypeInput"></a>
                            </th>
                            <th class="typeInput">
                                <input type="text" name="editnailtype" id="{{ $nailType->id }}" value="{{ $nailType->type }}" size="3">
                                <a href="{{$nailType->id}}" class="bi bi-pencil px-1 text-black showTypeInput"></a>
                            </th>
                            <th class="p-4">{{ $nailType->size_title }}</th>
                            <th class="p-4">{{ $nailType->price_title }}</th>
                            <th class="p-4">
                                <a href="typeDestroy/{{$nailType->id}}">
                                    <i class="text-black bi bi-trash3"></i>

                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="shadow p-3 bg-body-primery rounded-bottom">
                        @foreach ($Naildatas as $Naildata)
@foreach($Naildata['Size'] as $Size)
@foreach($Naildata['Price'] as $Price)

                    <tr>                            

                            <td class="px-5"> {{$Naildata}} </td>

                            <td class="px-4">{{$Size->size_name}}</td>
                            <td class="sizePrice px-4" value="{{$Price->id}}">
                                {{$Price->amount}} Ft.
                                <i class="bi bi-pencil px-4 text-black showPriceInput" ></i>
                            </td> 
                            <td class="priceInput">
                                <input type="text" name="newAmount" max="19999" size="2" value="{{$Price->amount}}">
                                <a href="#" class="bi bi-pencil px-4 text-black showPriceInput"></a>
                            </td>
                            
                                                   

                            
                        </tr>
                        @endforeach
                        @endforeach
                            @endforeach
                        <tr class="d-flex justify-content-center">
                           <td class="my-3">
                            <a href="#" class="btn btn-success newElementBtn">Hozzáad</a>
                        </td> 
                        </tr>
                    </tbody>                  
                </table>
                <div>
                    <button type="submit">Mentés</button>
                </div>
            </form>

            @include('partials.addElement')
            @endforeach
            @else
            <p>Nincs megjeleníthető adat.</p>
            @endif
            <!--table class="card">
                <thead class="d-flex justify-content-center">
                    <tr>
                        <th class="p-4">Saját köröm</th>
                        <th class="p-4">Ár</th>
                    </tr>
                </thead>
                <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery">
                    <tr>
                        <td>Sima manikűr</td>
                        <td class="p-2">2000 Ft.</td>
                    </tr>
                    <tr>
                        <td>Gél lakk</td>
                        <td class="p-2">4500 Ft.</td>
                    </tr>
                    <tr>
                        <td class="p-2">Műköröm eltávolítás + Gél lakk</td>
                        <td class="p-2">5000 Ft.</td>
                    </tr>
                    <tr>
                        <td>Köröm pótlás</td>
                        <td class="p-2">1000 Ft./köröm</td>
                    </tr>
                    <tr>
                        <td>Mköröm eltávolítás</td>
                        <td class="p-3">2000 Ft.</td>
                    </tr>
                </tbody>
            </table>

            <table class="card">
                <thead class="d-flex justify-content-center">
                    <tr>
                        <th class="p-3 col-5">Műköröm építés/töltés - Acryl gél- Gél lakk</th>
                        <th class="p-4">Méret</th>
                        <th class="p-4">Ár</th>
                    </tr>
                </thead>
                <tbody class="shadow p-4 mb-5 mx-4">
                    <tr class="">
                        <td></td>
                        <td class="p-4 mx-2">S</td>
                        <td class="p-4 ">5500 Ft.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>M</td>
                        <td class="p-2">6500 Ft.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>L</td>
                        <td class="p-2">7500 Ft.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>XL</td>
                        <td class="p-2">8500 Ft.</td>
                    </tr>
                </tbody>
            </table-->
            @include('partials.addBox')
        </div>
    </div>
</div>
@endsection