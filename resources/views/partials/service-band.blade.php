@php
    $services = config('our_services');
@endphp

<div class="servicesBand">
    <ul>
        @foreach ($services as $service)
            <li>
                <img src="{{Vite::asset('resources/img/' . $service['img'])}}" alt="img">
                <a href="#">{{ $service['text'] }}</a>
            </li>
        @endforeach

    </ul>
</div>
