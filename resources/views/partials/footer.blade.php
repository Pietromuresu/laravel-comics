@php
    $medias = config('media_links');

@endphp

<footer>

    <div class="footerTop">
        <div class="container">
            <div class="menus-side">

             <div>
              <ul>
                <h4>DC COMICS</h4>
                @foreach ($menu['header_menu'] as $item)

                <li>
                    <a href="{{ route($item['name']) }}">
                        {{$item['text']}}
                    </a>
                </li>
                @endforeach
              </ul>

              <ul>
                <h4>SHOP</h4>
                @foreach ($menu['shop_menu'] as $item)

                <li>
                  <a href="#">
                    {{$item['text']}}
                  </a>
                </li>

                @endforeach

              </ul>
             </div>

              <ul>
                <h4>DC</h4>
                @foreach ($menu['dc_menu'] as $item)
                <li>
                  <a href="#">
                    {{$item['text']}}
                  </a>
                </li>
                @endforeach
            </ul>

              <ul>
                <h4>SITES</h4>
                @foreach ($menu['sites_menu'] as $item)
                <li>
                  <a href="#">
                    {{$item['text']}}
                  </a>
                </li>
                @endforeach
              </ul>

            </div>
            <div class="logoSide">
              <img src="/img/dc-logo-bg.png" alt="">
            </div>
        </div>
      </div>

      <div class="footerBottom">
        <div class="container">

          <div>

            <div class="signUpBtn">
              <h4>SIGN-UP NOW!</h4>
            </div>

          </div>

          <div class="mediaLinks">

            <h3>FOLLOW US</h3>
            <ul>
                @foreach ($medias as $media)

                <li>
                    <a href="{{$media['href']}}" target="_blank">
                        <img src="{{ Vite::asset('resources/img/' . $media['icon']) }}" alt="ICON">
                    </a>
                </li>
                @endforeach


            </ul>

          </div>

        </div>


      </div>

</footer>

