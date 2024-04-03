@extends('layouts.admin')

@section('content')
    <div class="row ">
        <div class="col-7">
            <div class="card mb-5 shadow rounded-0">
                <div class="card-body">


                    <ul class="nav nav-line-bottom nav-example mb-3" id="pills-tab-alert-simple" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-alert-simple-design-tab" data-bs-toggle="pill"
                                href="#pills-alert-simple-design" role="tab" aria-controls="pills-alert-simple-design"
                                aria-selected="false" tabindex="-1">
                                Arrival</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-alert-simple-html-tab" data-bs-toggle="pill"
                                href="#pills-alert-simple-html" role="tab" aria-controls="pills-alert-simple-html"
                                aria-selected="true">HOUSE MANUAL
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="pills-departure-html-tab" data-bs-toggle="pill"
                                href="#pills-departure-html" role="tab" aria-controls="pills-departure-html"
                                aria-selected="true">Departure
                            </a>
                        </li>



                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="pills-places_to_eat-html-tab" data-bs-toggle="pill"
                                href="#pills-places_to_eat-html" role="tab" aria-controls="pills-places_to_eat-html"
                                aria-selected="true">Places to Eat
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="pills-bar-html-tab" data-bs-toggle="pill" href="#pills-bar-html"
                                role="tab" aria-controls="pills-bar-html" aria-selected="true">Bars
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-other-html-tab" data-bs-toggle="pill" href="#pills-other-html"
                                role="tab" aria-controls="pills-other-html" aria-selected="true">Other</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-shopping-html-tab" data-bs-toggle="pill"
                                href="#pills-shopping-html" role="tab" aria-controls="pills-shopping-html"
                                aria-selected="true">Shopping</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-attraction-html-tab" data-bs-toggle="pill"
                                href="#pills-attraction-html" role="tab" aria-controls="pills-attraction-html"
                                aria-selected="true">Attraction</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-activities-html-tab" data-bs-toggle="pill"
                                href="#pills-activities-html" role="tab" aria-controls="pills-activities-html"
                                aria-selected="true">Activities</a>
                        </li>


                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-alert-simple">
                        <div class="tab-pane tab-example-design fade show" id="pills-alert-simple-design" role="tabpanel"
                            aria-labelledby="pills-alert-simple-design-tab">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Check-in
                                    </h4>
                                    <p>Arrival</p>

                                    <div class="d-flex align-items-center">
                                        <span class="mdi mdi-clock-outline fs-1"></span>
                                        <p class="ms-4">Check-in time is anytime after 2:00 PM.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Getting here
                                    </h4>
                                    <p>Arrival</p>

                                    <div class="d-flex align-items-center">
                                        <span class="mdi mdi-palette-swatch fs-1"></span>
                                        <p class="ms-4">Check-in time is anytime after 2:00 PM.</p>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="mdi mdi-parking fs-1"></span>
                                        <p class="ms-4">Check-in time is anytime after 2:00 PM.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Find ground transportation
                                    </h4>
                                    <p>Arrival</p>

                                    <div class="mb-3 row">
                                        <div class=" col-12 col-md-6"><input type="date" class="form-control"
                                                placeholder="State " id="state" name="state" required=""></div>
                                        @error('state')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror

                                        <div class=" col-12 col-md-6"><input type="time" class="form-control"
                                                placeholder="State " id="state" name="time" required=""></div>
                                        @error('state')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3 row">
                                        <div class=" col-12 col-md-6"><input type="text" class="form-control"
                                                placeholder="Pick uo from which airport? * " id="state"
                                                name="state" required=""></div>
                                        @error('state')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror

                                        <div class="col-md-6 col-12">
                                            <select name="address_linking_rule" class="form-control form-select"
                                                id="country">
                                                <option disabled selected class="text-muted">Terminal
                                                </option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                                    value="automatic" class="text-dark">Automatic</option>
                                                <option value="use_address" class="text-dark">use address</option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'use_lat' ? 'selected' : '' }}
                                                    value="use_lat" class="text-dark">use lat/lon</option>
                                            </select>

                                            @error('address_linking_rule')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">


                                        <div class="col-md-6 col-12">
                                            <select name="address_linking_rule" class="form-control form-select"
                                                id="country">
                                                <option disabled selected class="text-muted">Passengers
                                                </option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                                    value="automatic" class="text-dark">Automatic</option>
                                                <option value="use_address" class="text-dark">use address</option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'use_lat' ? 'selected' : '' }}
                                                    value="use_lat" class="text-dark">use lat/lon</option>
                                            </select>

                                            @error('address_linking_rule')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>





                        </div>





                        <div class="tab-pane tab-example-html fade  " id="pills-alert-simple-html" role="tabpanel"
                            aria-labelledby="pills-alert-simple-html-tab1">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane tab-example-html fade  " id="pills-departure-html" role="tabpanel"
                            aria-labelledby="pills-departure-html-tab1">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane tab-example-html fade  " id="pills-places_to_eat-html" role="tabpanel"
                            aria-labelledby="pills-places_to_eat-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">


                                            @foreach ($places_data['place_to_eat']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane tab-example-html fade  " id="pills-bar-html" role="tabpanel"
                            aria-labelledby="pills-bar-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($places_data['bars']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane tab-example-html fade  " id="pills-other-html" role="tabpanel"
                            aria-labelledby="pills-other-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">


                                            @foreach ($places_data['other']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>





                        </div>

                        <div class="tab-pane tab-example-html fade  " id="pills-shopping-html" role="tabpanel"
                            aria-labelledby="pills-shopping-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($places_data['shopping']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane tab-example-html fade  " id="pills-attraction-html" role="tabpanel"
                            aria-labelledby="pills-attraction-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($places_data['attraction']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="tab-pane tab-example-html fade  " id="pills-activities-html" role="tabpanel"
                            aria-labelledby="pills-activities-html-tab">
                            <div class="code-toolbar">

                                <div class="row m-2">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($places_data['activities']['results'] as $place_to_eat)
                                                <div class="col-12 col-md-6">
                                                    <a href="">
                                                        <div class="mt-3 card rounded-0 shadow">
                                                            <div class="position-relative"
                                                                style="width: 100%; height: 200px; overflow: hidden;">
                                                                {{-- Check if the place has a photo reference --}}
                                                                @if (isset($place_to_eat['photos']) && count($place_to_eat['photos']) > 0)
                                                                    @php
                                                                        $default_img =
                                                                            'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg';
                                                                        $photo_reference =
                                                                            $place_to_eat['photos'][0][
                                                                                'photo_reference'
                                                                            ];
                                                                        $photo_url =
                                                                            "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=$photo_reference&key=" .
                                                                            env('GOOGLE_MAP_KEY');

                                                                    @endphp
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="{{ $photo_url ? $photo_url : $default_img }}"
                                                                        alt="Image">
                                                                @else
                                                                    {{-- If no photo available, display a placeholder image or some default content --}}
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;"
                                                                        src="placeholder.jpg" alt="Image">
                                                                @endif
                                                                <h4 class="card-title position-absolute text-light"
                                                                    style="bottom: 0; left: 0; padding-left: 0.625rem;">
                                                                    {{ $place_to_eat['name'] }}
                                                                </h4>
                                                            </div>
                                                            <div class="card-footer" style="background-color: #fff">
                                                                <p>{{ $place_to_eat['vicinity'] }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="col-5 ">
            <div id="map" style="height: 90vh;width: 100%"></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function createPhotoMarker() {
            var photos = place.photos;
            if (!photos) {
                return;
            }

            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                title: place.name,
                icon: photos[0].getUrl({
                    maxWidth: 40,
                    maxHeight: 35
                })
            });

        }

        // Initialize and display the map
        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 33.6844,
                    lng: 73.0479
                }, // Islamabad coordinates
                zoom: 14 // Adjust the zoom level as needed
            });

            var places = <?php echo json_encode($places_data['place_to_eat']); ?>; // PHP array to JavaScript

            // Loop through places data and add markers with labels
            for (var i = 0; i < places.results.length; i++) {


                var place = places.results[i];
                // alert(place);
                var marker = new google.maps.Marker({
                    position: {
                        lat: place.geometry.location.lat,
                        lng: place.geometry.location.lng
                    },
                    map: map,
                    label: {
                        text: place.name,
                        color: 'black',
                        fontSize: '14px',
                        fontWeight: 'bold'
                    },

                });

                // Attach a click event to the marker to show additional information if needed
                attachInfoWindow(marker, place.name, place.vicinity); // Function defined below
            }
        }

        // Function to attach info window to marker
        function attachInfoWindow(marker, name, vicinity) {
            var infowindow = new google.maps.InfoWindow({
                content: '<div><strong>' + name + '</strong><br>' + vicinity + '</div>'
            });

            marker.addListener('click', function() {
                infowindow.open(marker.getMap(), marker);
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap">
    </script>
@endsection
