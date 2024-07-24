@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')

<div id="service" class="services_box">

    <h2 class="">Szolgáltatásaim</h2>
    
    <div class="d-table m-auto mt-5">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="d-flex text-center p-3 table-box">
           
            <form action="updateNail/sizeID={{$newid}}" method="post">
            @csrf
            @method('PUT')
            <table class="table_1">
                <thead>
                    <tr>
                        @if ( !empty($nailTypes) )
                        @foreach ($nailTypes as $nailType)
                        <th class="bg-danger-subtle p-4">
                            {{ $nailType->type }}
                        </th>
                        @endforeach
                        @else
                        <p>Nincs megjeleníthető ár.</p>
                        @endif

                        <th class="bg-danger-subtle p-4">Méret</th>
                        <th class="bg-danger-subtle p-4 " scope="col">Ár</th>
                    </tr>
                </thead>
                <tbody class="shadow p-4 mb-5 mx-5 bg-body-primery rounded-bottom">
                    <tr>
                        <th></th>                        
                        <td>
                            @foreach($oldSizes as $oldSize)
                            <input class="text-center" type="text" size="2" maxlength="1" name="newSize" value="{{ $oldSize->size_name}}">
                            @endforeach

                        </td>
                       @foreach($oldPrices as $oldPrice)
                       @if($oldSize->id == $oldPrice->id)
                       @foreach($oldPrice->prices as $price)
                        <td class="p-2 d-flex">
                            <input class="text-center" type="number" name="newPrice" id="newPrice" value="{{ $price->amount }}">
                        </td>
                        @endforeach
                        @endif
                        @endforeach
                    </tr>
                    
                </tbody> 
            </table>
                <div>
                    <button class="btn btn-success" type="submit">Mentés</button>
                    <a class="btn btn-primary" href="{{route('editService')}}">Vissza</a>
                </div>
            </form>
            

        </div>
    </div>
    @endsection