@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form action="{{ route('guidebooks.storeCheckins', ['id' => $guidebook->id]) }}" method="POST">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Name this card so you can find it later</h4>
                                        <div class="mb-3 row">
                                            <div class=" col-12"><input type="text" class="form-control"
                                                    placeholder="Card name" id="address" name="address" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Does this recommendation have a specific address?</h4>

                                        <div class="col-md-8 col-12">
                                            <div class="form-check-inline mt-2 form-check">
                                                <input name="customRadioInline" value="1" type="radio"
                                                    id="customRadioInline1" class="form-check-input">
                                                <label for="customRadioInline1" class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <input name="customRadioInline" type="radio" value="0"
                                                    id="customRadioInline2" class="form-check-input">
                                                <label for="customRadioInline2" class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                        <div class="card">
                                            <div class="card-body">

                                                @csrf

                                                <div class=" mb-6">
                                                    <h4 class="mb-1">Search by address or business name
                                                    </h4>
                                                    <p>Based on your selection, we'll populate as much as we can in the
                                                        fields below about this
                                                        location</p>
                                                </div>

                                                <div class="card shadow">
                                                    <div class="card-body">


                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text" required
                                                                    class="form-control" placeholder="Address"
                                                                    id="address" name="address" {{-- value="{{ isset($guidebook->address) ? $guidebook->address : old('address') }}"> --}}>
                                                            </div>
                                                            @error('address')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class="col-sm-6 mb-3 mb-lg-0">
                                                                <input type="text" class="form-control"
                                                                    {{-- value="{{ isset($guidebook->latitude) ? $guidebook->latitude : old('latitude') }}" --}} placeholder="Latitude"
                                                                    name="latitude" id="latitude" required="">
                                                                @error('latitude')
                                                                    <small style="color:red">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    {{-- value="{{ isset($guidebook->longitude) ? $guidebook->longitude : old('longitude') }}" --}} placeholder="Longitude"
                                                                    name="longitude" id="longitude" required="">
                                                                @error('Longitude')
                                                                    <small style="color:red">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class=" mb-6 mt-3">
                                                    <h4 class="mb-1">Review the address below, do you need to add a
                                                        prefix or apartment number?
                                                    </h4>

                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text" class="form-control"
                                                                    placeholder="Prefix/apartment no." id="apartment_no"
                                                                    {{-- value="{{ isset($guidebook->apartment_no) ? $guidebook->apartment_no : old('apartment_no') }}" --}} name="apartment_no"
                                                                    required="">

                                                                @error('apartment_no')
                                                                    <small style="color:red">{{ $message }}</small>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text" class="form-control"
                                                                    placeholder="Street No." {{-- value="{{ isset($guidebook->street_no) ? $guidebook->street_no : old('street_no') }}" --}}
                                                                    id="street_number" name="street_number" required="">
                                                            </div>

                                                            @error('street_no')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>


                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text"
                                                                    class="form-control" placeholder="Street Name"
                                                                    id="street_name" name="street_name"
                                                                    {{-- value="{{ isset($guidebook->street_no) ? $guidebook->street_no : old('street_name') }}" --}} required="">
                                                                @error('street_name')
                                                                    <small style="color:red">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text"
                                                                    class="form-control" {{-- value="{{ isset($guidebook->city) ? $guidebook->city : old('city') }}" --}}
                                                                    placeholder="City/ suburb *" id="city"
                                                                    name="city" required=""></div>
                                                            @error('city')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text"
                                                                    class="form-control" {{-- value="{{ isset($guidebook->state) ? $guidebook->state : old('state') }}" --}}
                                                                    placeholder="State " id="state" name="state"
                                                                    required=""></div>
                                                            @error('state')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text"
                                                                    class="form-control" {{-- value="{{ isset($guidebook->country) ? $guidebook->country : old('country') }}" --}}
                                                                    placeholder="Country *" id="country" name="country"
                                                                    required=""></div>

                                                            @error('country')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class=" col-12"><input type="text"
                                                                    class="form-control" {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code : old('postal_code') }}" --}}
                                                                    placeholder="Postal Code" id="postal_code"
                                                                    name="postal_code" required="">
                                                                @error('postal_code')
                                                                    <small style="color:red">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div id="map"></div>
                                                    </div>

                                                </div>

                                                <div class=" mb-6 mt-3">
                                                    <h4 class="mb-1">How would you like the address to be linked?
                                                    </h4>
                                                    <p>In the Arrival section of your guidebook, we construct a link to
                                                        google maps for your guests.
                                                        Here
                                                        you can choose how that link is constructed.</p>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8 col-12">
                                                        <select name="address_linking_rule"
                                                            class="form-control form-select" id="country">
                                                            <option disabled selected class="text-muted">Address
                                                                Linking Rule
                                                            </option>
                                                            <option
                                                                {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                                                value="automatic" class="text-dark">Automatic</option>
                                                            <option
                                                                {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'use_address' ? 'selected' : '' }}
                                                                value="use_address" class="text-dark">use address
                                                            </option>
                                                            <option
                                                                {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'use_lat' ? 'selected' : '' }}
                                                                value="use_lat" class="text-dark">use lat/lon</option>
                                                        </select>

                                                        @error('address_linking_rule')
                                                            <small style="color:red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row  mt-3">
                                                    <div class="col-md-8 col-12">
                                                        <div class="card shadow">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div
                                                                        class="mb-3 mb-lg-0 col-xl-2 col-lg-2 col-md-2 col-2">
                                                                        <span
                                                                            class="mdi mdi-map-marker rounded-circle avatar-md fs-2"></span>

                                                                    </div>
                                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-8">
                                                                        <div class="row g-3 align-items-center row">
                                                                            <div class="col-xxl-12 col-md-12">
                                                                                <p>Preview Address Link</p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="mb-3 mb-lg-0 col-xl-2 col-lg-2 col-md-2 col-2">
                                                                        <span
                                                                            class="mdi mdi-palette-swatch rounded-circle avatar-md fs-2"></span>

                                                                    </div>
                                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-8">
                                                                        <div class="row g-3 align-items-center row">
                                                                            <div class="col-xxl-12 col-md-12">
                                                                                <p> <a id="google_map_address"
                                                                                        href=""></a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class=" mb-6 mt-3">
                                                            <h4 class="mb-1">Name this guidebook so you can find it
                                                                later
                                                            </h4>

                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class=" col-12 col-md-8"><input type="text"
                                                                    class="form-control" placeholder="Descriptive Name"
                                                                    {{-- value="{{ isset($guidebook->descriptive_name) ? $guidebook->descriptive_name : old('descriptive_name') }}" --}} id="descriptive_name"
                                                                    name="descriptive_name" required=""></div>
                                                            @error('descriptive_name')
                                                                <small style="color:red">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Review the suggested title, do you want to change it?
                                        </h4>
                                        <p>Guests will see this heading at the top of the card *
                                        </p>
                                        <textarea id="summernote" name="order_to_gain_property"></textarea>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Review the url, do you want to change it?

                                        </h4>
                                        <p>Guests will see this when they open the card
                                        </p>
                                        <div class="mb-3 row">
                                            <div class=" col-12"><input type="text" class="form-control"
                                                    {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}" --}} placeholder="Website" id="website"
                                                    name="website" required="">
                                                @error('website')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Review the phone number, do you want to change it?

                                        </h4>
                                        <p>Guests will see this when they open the card
                                        </p>
                                        <div class="mb-3 row">
                                            <div class=" col-12"><input type="text" class="form-control"
                                                    {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}" --}} placeholder="Phone Number" id="phone_number"
                                                    name="phone_number" required="">
                                                @error('phone_number')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>
                                            What else would you like to tell your guests?
                                        </h4>
                                        <p>Guests will see this heading at the top of the card *
                                        </p>
                                        <textarea id="summernote1" name="tell_your_guest"></textarea>

                                    </div>
                                </div>

                                <div class="mt-3 mb-6 col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="mb-4 card shadow rounded-0">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                Apply settings</h4>
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-8">


                                                    <div class="row">
                                                        <div class="col-12">

                                                            <h4>
                                                                Selecting a category will determine which recommendation tab
                                                                this card will appear on</h4>
                                                            <p class="mt-3 mb-0">This will allow only guests using a secure
                                                                link to
                                                                view your guidebook.</p>
                                                            <p>Paid subscribers can create custom categories. Click the
                                                                round icon in the upper right corner and select Manage
                                                                Account to see upgrade options.</p>

                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <div class="d-flex">
                                                                        <span
                                                                            class="mdi mdi-text-box-multiple-outline rounded-circle avatar-md fs-2"></span>

                                                                        <select name=""
                                                                            class="form-control form-select"
                                                                            style="width: 100%;" id="dailyDigest">
                                                                            <option disabled selected>Check-in card</option>
                                                                            @foreach ($data['categories'] as $item)
                                                                                <option value="{{ $item->id }}"
                                                                                    class="text-dark">{{ $item->name }}
                                                                                </option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row mt-3">
                                                                <div class="col-8">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class=" mdi mdi-clock-outline rounded-circle avatar-md fs-2"></span>
                                                                        <div class="row">


                                                                            <div class="col-12">
                                                                                <div class="d-flex ">


                                                                                    <div
                                                                                        class="form-check d-flex justify-content-center">
                                                                                        <label class="form-check-label"
                                                                                            for="selectAll">
                                                                                            Ignore Hours of Operation from
                                                                                            Google
                                                                                        </label>


                                                                                    </div>
                                                                                    <div class="ms-2">
                                                                                        <input class="form-check-input"
                                                                                            type="checkbox" value=""
                                                                                            id="selectAll">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                @include('components.guidebook.other.guidebook_card')

                                <div class="row">
                                    <div class="col-xl-3 col-md-12">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote').summernote();

        });
    </script>

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
                var label = place.name; 
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
                initMap(label, latitude, longitude);

            });
        }
    </script>



    <script async defer onload="initAutocomplete()"
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap">
    </script>

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
                zoom: 15,
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
