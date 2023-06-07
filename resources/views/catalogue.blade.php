@extends('layout.main')


@section('content')

    <div class="catalogue-wrapper">

        <h1 class="my-4">Our Products</h1>
        <div class="container">
            @foreach ($comics as $item )

            @include('partials.card',
                    [
                        'product' => 'product'
                    ] )

            @endforeach
        </div>
    </div>

@endsection
