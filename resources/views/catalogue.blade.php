@extends('layout.main')


@section('content')

    <div class="catalogue-wrapper">

        <h1 class="my-4">Our Products</h1>
        <div class="container">
            @foreach ($comics as $item )
            <div class="pm-cardContainer">

                    <div class="pm-card-cat">
                        <div class="containerImg">
                            <img src="{{ $item['thumb'] }}" alt="IMG">
                        </div>

                        <div class="name">
                            <h5>{{ $item['title']}}</h5>
                            <h5>{{ $item['price']}}</h5>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

@endsection
