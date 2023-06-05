@extends('main')

@php
    $faqs = config('faqs')
@endphp

@section('content')

<div class="pm-faq">
    <h1>Frequently Asked Questions</h1>
    <div class="container">

        @foreach ($faqs as $faq)


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq['collapse_count']}}" aria-expanded="true" aria-controls="{{$faq['collapse_count']}}">
                        {{$faq['question']}}
                    </button>
                </h2>
                <div id="{{$faq['collapse_count']}}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{$faq['answer']}}
                    </div>
                </div>
            </div>


            @endforeach




        </div>
    </div>
    </div>
    @endsection
