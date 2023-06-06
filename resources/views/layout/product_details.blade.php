@extends('layout.main')

@php
    $services = config('our_services')
@endphp

@section('content')

<div class="pm-jumbotron"></div>
<div class="b-band"></div>

<div class="pm-container container">
    <div class="currentProductImage">
        <a href="#">

            <img src="{{ $product['thumb']}}" alt="{{$product['title']}}">


        </a>
    </div>

    <div class="row">
        <div class="col-md-7">
            <h3>{{$product['title']}}</h3>
            <div class="pm-price">
                <div class="btn-group w-100" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn pm-green  d-flex justify-content-between">
                        <span >
                            U.S. Price: {{$product['price']}}
                        </span>
                        <span>
                            AVAILABLE
                        </span>
                    </button>

                    <div class="btn-group border-start border-black" role="group">
                      <button type="button" class="btn pm-green dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Check Availability
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
            <div class="pm-description">
                {{$product['description']}}
            </div>

        </div>

        <div class="col-md-5">
            <div class="pm-ads">
            <span class="d-inline-block text-end w-100">
                ADVERTISMENT
            </span>
                <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
            </div>
        </div>



    </div>
</div>

    <div class="pm-specifics">
        <div class="container">

            <div class="row mt-5">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="py-3" scope="colspan-2"><h4>Talent</h4></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-40">Art by:</td>
                                <td class="fs-small">
                                    <a href="#">

                                        {{ implode( ', ', $product['artists']) }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Written by:</td>
                                <td>
                                    <a href="#">

                                        {{implode( ', ', $product['writers'])}}
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="py-3" scope="col"><h4>Specs</h4></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-40">Series:</td>
                                <td class="fs-small">
                                    <a class="text-primary text-uppercase" href="#">
                                        {{$product['series']}}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>U.S. Price:</td>
                                <td>
                                    {{$product['price']}}
                                </td>
                            </tr>
                            <tr>
                                <td>On Sale Date:</td>
                                <td>{{date_format(date_create($product['sale_date']),"M d Y ")}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <div class="services-band w-100 ">
       <div class="row pm-main-row justify-center">
        @foreach ($services as $service)

        <div class="col">
            <div class="row d-flex justify-between">
                <div class="col">
                    <h3 class="text-uppercase">
                        {{$service['text']}}
                    </h3>
                </div>
                <div class="col text-end">
                    <img src="{{ Vite::asset('resources/img/' . $service['img']) }}" alt="">
                </div>
            </div>
        </div>

        @endforeach
       </div>
    </div>
@endsection
