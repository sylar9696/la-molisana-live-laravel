@extends('layout.layout')

{{-- @section('style')
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
@endsection --}}

@section('title', 'prodotti')

@section('content')
    <div class="bg-image">
        <div class="row">
        {{-- @php
            dump($products)
        @endphp --}}
            @foreach ( $products as $key => $product )


                    <div class="col card">
                        <a href=" {{ route( 'prodotto', [ 'id' => $key ] ) }} ">
                            <img src=" {{ $product['src'] }} " alt="" class="pasta-img">
                            <h3>
                                {{ $product['titolo'] }}
                            </h3>
                        </a>
                    </div>


            @endforeach
        </div>
    </div>

@endsection
