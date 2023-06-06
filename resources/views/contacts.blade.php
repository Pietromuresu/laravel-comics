@extends('layout.main')


@section('content')

<div class="contacts-container">
    <div class="container">

        <h1>Contact Us Here</h1>

        <div class="form-container">

            <div class="mb-3 w-50">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter here your Email">
            </div>
            <div class="mb-3 w-75">
                <label for="exampleFormControlTextarea1" class="form-label">Type here your message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

        </div>
    </div>
</div>
@endsection
