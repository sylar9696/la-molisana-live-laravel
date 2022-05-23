@extends('layout.layout')

@section('title', 'prodotti')

@section('content')
    <div class="row">
        {{-- @php
            dump($products)
        @endphp --}}
            @foreach ( $products as $product )
                <div class="col card">
                    <img src=" {{ $product['src'] }} " alt="" class="pasta-img">
                    <h3>
                        {{ $product['titolo'] }}
                    </h3>
                </div>
            @endforeach
        </div>
@endsection
