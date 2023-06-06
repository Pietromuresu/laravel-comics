@extends('layout.main')


@section('content')

<div class="pm-jumbotron"></div>
<div class="b-band"></div>

<div class="pm-container container">
    <div class="currentProductImage">
        <a href="#">

            <img src="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY" alt="">


        </a>
    </div>

    <div class="row">
        <div class="col-md-7">
            <h3>Action Comics #100</h3>
            <div class="pm-price">
                <div class="btn-group w-100" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn pm-green  d-flex justify-content-between">
                        <span >
                            U.S. Price: $19,99
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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa necessitatibus unde quis aperiam aspernatur vitae recusandae soluta incidunt, quas dicta ratione in harum, voluptas accusamus eius placeat tempore eaque repudiandae cupiditate autem deleniti minus. Eum, optio adipisci repudiandae ipsa expedita ad libero eos debitis suscipit laudantium, rem mollitia blanditiis ullam. Adipisci cumque harum quaerat voluptates porro id iste velit cupiditate fuga et impedit expedita accusantium, mollitia illo officia odio quisquam delectus enim corrupti molestiae, maiores beatae perspiciatis inventore. Culpa error eius odio, earum quaerat veritatis dolore repudiandae, temporibus similique, aperiam impedit nemo necessitatibus nostrum velit ducimus! Ad quisquam voluptas id.
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

            <div class="row">
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
                                <td class="fs-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam rem quam itaque illum et exercitationem odio iusto debitis! Asperiores assumenda reprehenderit corporis ex, voluptatum quam beatae pariatur libero maiores placeat.</td>
                            </tr>
                            <tr>
                                <td>Written by:</td>
                                <td>
                                    <a href="#">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aperiam veritatis dolor officiis fugiat incidunt temporibus enim natus minima perspiciatis, amet exercitationem praesentium iste voluptates quae corporis suscipit autem facilis.
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
                                    <a class="text-primary" href="#">
                                        ACTION COMICS
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>U.S. Price:</td>
                                <td>$9,99</td>
                            </tr>
                            <tr>
                                <td>On Sale Date:</td>
                                <td>Oct 02 2018</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="services-band w-100 ">
                ora | dopo | domani
            </div>
        </div>
    </div>

@endsection
