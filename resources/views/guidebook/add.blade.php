@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">
        {{-- <div class="row my-3">



            <div class="container py-4">

                <div class="row">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-end order">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>

                    <div class="col py-2">
                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title text-muted">Guidebook Address, Name, and Image</h4>
                                <p class="card-text">Name your guidebook and locate it on the map</p>
                                @include('components.guidebook.gudiebook_address_name_details')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-end">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge rounded-pill bg-success">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-end">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card border-success shadow">
                            <div class="card-body">
                                <div class="float-end text-success"></div>
                                <h4 class="card-title text-success">Arrival & Departure</h4>
                                <p class="card-text">Create and assign arrival & departure cards</p>
                                
                                    @include('components.guidebook.arrival_and_departure')
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-end">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col border-end">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end text-muted"><span class="mdi mdi-map-marker"></span>Wed, Jan 11th 2021 8:30 AM</div>
                                <h4 class="card-title">Day 3 Sessions</h4>
                                <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level
                                    irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch,
                                    mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual
                                    bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3
                                    wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica
                                    Williamsburg sartorial tote bag distillery Portland before
                                    they sold out gastropub taxidermy Vice.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                        <div class="row h-50">
                            <div class="col border-end">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                        <h5 class="m-2">
                            <span class="badge rounded-pill bg-light border">&nbsp;</span>
                        </h5>
                        <div class="row h-50">
                            <div class="col">&nbsp;</div>
                            <div class="col">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col py-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end text-muted">Thu, Jan 12th 2021 11:30 AM</div>
                                <h4 class="card-title">Day 4 Wrap-up</h4>
                                <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> --}}


        <div class="p-6 container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="border-bottom pb-4 mb-4 ">
                        <h3 class="mb-0 fw-bold">Guidebook</h3>
                    </div>
                </div>
            </div>
            <div class="mb-8 row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Guidebook Address, Name, and Image</h4>
                        <p class="mb-0 fs-5 text-muted">Name your guidebook and locate it on the map</p>
                    </div>
                </div>

                @include('components.guidebook.gudiebook_address_name_details')

            </div>

            @if (isset($guidebook))
                <div class="mb-8 row">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="mb-4 mb-lg-0">
                            <h4 class="mb-1">Arrival & Departure</h4>
                            <p class="mb-0 fs-5 text-muted">Create and assign arrival & departure cards</p>
                        </div>
                    </div>

                    @include('components.guidebook.arrival_and_departure')

                </div>

                <div class="mb-8 row">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="mb-4 mb-lg-0">
                            <h4 class="mb-1">House Manual & Recommendations</h4>
                            <p class="mb-0 fs-5 text-muted">Create, assign, and reorder house manual and recommendation
                                cards</p>
                        </div>
                    </div>

                    @include('components.guidebook.house_manual')

                </div>

                <div class="mb-8 row">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="mb-4 mb-lg-0">
                            <h4 class="mb-1">Customization</h4>
                            <p class="mb-0 fs-5 text-muted">Add your own branding and configure settings and integrations
                            </p>
                        </div>
                    </div>

                    @include('components.guidebook.customization')

                </div>

                <div class="mb-8 row">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="mb-4 mb-lg-0">
                            <h4 class="mb-1">Recommendations-only Guidebook</h4>
                            <p class="mb-0 fs-5 text-muted">Create a recommendations-only version of this guidebook</p>
                            <p class="mb-0 fs-5 text-muted">Want to share your recommendations with others without exposing
                                any of your listing information?</p>
                            <p class="mb-0 fs-5 text-muted">Create a recommendations-only version of your guidebook that you
                                can share widely!</p>
                        </div>
                    </div>

                    @include('components.guidebook.recommendations')

                </div>
            @endif

        </div>

    </div>

    </div>
@endsection

@section('scripts')
    <script>
        var map;
        var marker;



        function initAutocomplete() {
            var autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('address'), {
                    types: ["address"]
                }
            );

            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();

                if (!place.geometry) {
                    return;
                }

                var street_number = '';
                var route = '';
                var city = '';
                var state = '';
                var country = '';
                var postal_code = '';
                var label = place.name; // Use the place name as label by default
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();

                for (var i = 0; i < place.address_components.length; i++) {
                    var component = place.address_components[i];
                    var types = component.types;
                    if (types.includes('street_number')) {
                        street_number = component.long_name;
                    } else if (types.includes('route')) {
                        route = component.long_name;
                    } else if (types.includes('locality')) {
                        city = component.long_name;
                    } else if (types.includes('administrative_area_level_1')) {
                        state = component.short_name;
                    } else if (types.includes('administrative_area_level_2')) {
                        city = component.long_name; // Try using administrative_area_level_2 for city
                    } else if (types.includes('country')) {
                        country = component.long_name;
                    } else if (types.includes('postal_code')) {
                        postal_code = component.long_name;
                    }
                }

                var street_address = street_number + ' ' + route;

                var mapsUrl = "https://www.google.com/maps?q=" + encodeURIComponent(street_number + " " + route +
                    ", " + city + ", " + state + ", " + country + " " + postal_code);

                document.getElementById("google_map_address").setAttribute("href", mapsUrl);
                document.getElementById("google_map_address").textContent = street_number + " " + route + ", " +
                    city + ", " + state + ", " + country + " " + postal_code;

                document.getElementById('street_number').value = street_number;
                document.getElementById('street_name').value = route;
                document.getElementById('city').value = city;
                document.getElementById('state').value = state;
                document.getElementById('country').value = country;
                document.getElementById('postal_code').value = postal_code;
                document.getElementById('latitude').value = latitude;
                document.getElementById('longitude').value = longitude;
                initMap(label,latitude,longitude);

            });
        }
    </script>

    <script async defer onload="initAutocomplete()"
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap">
    </script>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap&v=weekly" defer>
    </script> --}}

    <script>
    var map;
    var marker;
    var labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let labelIndex = 0;


    function initMap(label, latitude, longitude) {
        const location = {
            lat: latitude,
            lng: longitude
        };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: location,
        });

        google.maps.event.addListener(map, "click", (event) => {
            addMarker(event.latLng, map, label);
        });

        addMarker(location, map, label);
    }

    function addMarker(location, map, label) {
        new google.maps.Marker({
            position: location,
            label: label,
            map: map,
        });
    }

        // window.initMap = initMap;
    </script>
@endsection
