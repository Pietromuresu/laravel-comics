
@extends('layout.main')


@section('content')



<div class="main">
    <div class="jumbotron"></div>

    <div class="products">
      <div class="container">
        <h3 class="currentSeriesTitle">
          CURRENT SERIES
        </h3>

        <div class="card-wrapper">
            @foreach ($comics as $item )
            <a href="{{ route('product_details', $item['slug']) }}">

                <div class="cardContainer">

                    <div class="pm-card">
                        <div class="containerImg">
                            <img src="{{ $item['thumb'] }}" alt="IMG">
                        </div>

                        <div class="name">
                            <h5>{{ $item['title']}}</h5>
                        </div>
                    </div>

                </div>

            </a>
            @endforeach

        </div>
      </div>
      <div class="loadBtn">
        <h4>LOAD MORE</h4>
      </div>
    </div>


  </div>
  @include('partials.service-band')
@endsection
