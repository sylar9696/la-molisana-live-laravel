@extends('layout.layout')

{{-- @section('style')
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
@endsection --}}

@section('title', 'singolo prodotto')


@section('content')
    {{-- <h2>{{ $singoloProdotto['titolo'] }}</h2> --}}
    <div class="bg-blue flex-column align-items-center text-center">
        <h2>{{ $singoloProdotto['titolo'] }}</h2>
        <img src=" {{ $singoloProdotto['src-h'] }} " alt="" style="width: 30%;">
        <img src=" {{ $singoloProdotto['src-p'] }} " alt="" style="width: 50%;">
        <p> {{!! $singoloProdotto['descrizione'] !!}} </p>
    </div>
@endsection
