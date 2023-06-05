
@extends('main')


@section('content')



<div class="main">
    <div class="jumbotron"></div>

    <div class="products">
      <div class="container">
        <h3 class="currentSeriesTitle">
          CURRENT SERIES
        </h3>

        <div class="card-wrapper">
          <div class="cardContainer">

          </div>
        </div>
      </div>
      <div class="loadBtn">
        <h4>LOAD MORE</h4>
      </div>
    </div>


  </div>
  @include('partials.service-band')
@endsection
