@extends('layout.main')

@section('main-content')
    @foreach ($packages as $package )
        
        <h1>Destinazione: {{$package->Destination}}</h1>
        <h2>Stato: {{$package->State}}</h2>
        <h2>Giorni: {{$package->Days}}</h2>
        <h3>Trattamento: {{$package->Treatment}}</h3>
        <h3>Prezzo Finale: {{$package->Price}}</h3>

        @if(!$loop->last)
            <hr>
        @endif

    @endforeach
@endsection