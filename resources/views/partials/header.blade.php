@php

$menu = config('all_menus');

@endphp


<header>
    <div class="container">

        <div class="logo">
          <img src="/img/dc-logo.png" alt="">
        </div>


        <div class="headerMenu">
          <div class="hamMenu">
            <h1 class="displayNone"><i class="fa-solid fa-bars"></i></h1>
          </div>
          <nav>
            <ul>
                @foreach ($menu['header_menu'] as $item)

                    <li>

                        <a href="{{ route($item['name']) }}">{{ $item['name'] }}</a>

                    </li>

                @endforeach
            </ul>
        </nav>
        </div>

      </div>
</header>
