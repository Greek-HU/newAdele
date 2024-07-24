@extends('layoute.private')
@extends('partials.privateNavBar')
@section('content')
<div class="cont pt-4">
    <div class="cont_box">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
        <h2>Időpont foglalás</h2>
        <form action="updateContData" method="post">
            @csrf
            @method('PUT')
        <ul >
            <li class="p-2">
                <strong>Cím: </strong>
                <input type="text" name="newAddress" id="" 
                value="{{ auth()->user()->address }}">
            </li>
            <li class="p-2">
                <strong>Email: </strong>
                <input type="email" name="newEmail" id="" 
                value="{{ auth()->user()->email }}">
            </li>
            <li class="p-2 pb-3">
                <strong>Tel.: </strong>
                <input type="tel" name="newPhoneNum" id="" 
                value="{{ auth()->user()->phoneNum }}">
            </li>
            <button type="submit">Mentés</button>
        </ul>
        </form>
    </div>
</div> 
@endsection