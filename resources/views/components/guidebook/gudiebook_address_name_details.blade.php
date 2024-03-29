{{-- <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-target="#t1_details" data-bs-toggle="collapse">Show
    Details ▼</button>
<div class="collapse border my-2" id="t1_details">
    <div class="p-2 text-monospace">

        <h4 class="my-1">Search by address or business name </h4>
        <p>Based on your selection, we'll populate as much as we can in the fields below about this location</p>
        <form>
            <div class=" border my-2">
                <div class="p-2 text-monospace">


                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                                <input type="text" name="latitude" id="latitude" class="form-control"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                                <input type="text" name="longitude" id="longitude" class="form-control"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <h4>Review the address below, do you need to add a prefix or apartment number?</h4>

            <div class="row mt-3">
                <div class="col-6">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="apartment_no" class="form-label">Prefix/apartment no.</label>
                            <input type="text" name="apartment_no" class="form-control" id="apartment_no">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="street_number" class="form-label">Street no.</label>
                            <input type="text" name="street_number" class="form-control" id="street_number">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="street_name" class="form-label">Street Name</label>
                            <input type="text" name="street_name" class="form-control" id="street_name">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="city" class="form-label">City/ suburb *</label>
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="state" class="form-label">State / Province</label>
                            <input type="text" name="state" id="state" class="form-control">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="country" class="form-label">Country *</label>
                            <input type="text" name="country" id="country" class="form-control">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Postal Code</label>
                            <input type="text" name="postal_code" id="postal_code" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div id="map"></div>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-12">
                    <h4>How would you like the address to be linked?</h4>

                    <p class="mb-3"> In the Arrival section of your guidebook, we construct a link to google maps for
                        your
                        guests. Here you
                        can choose how that link is constructed.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <label for=""  class="form-label">Address Linking Rule
                    </label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex card-title text-muted">
                                <p>Preview Address Link</p>
                            </div>

                            <div>
                                <a id="google_map_address" href="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-3">

                <div class="col-12">
                    <h4 class="mt-3">Name this guidebook so you can find it later</h4>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Descriptive Name
                                        *</label>
                                    <input type="text" name="descriptive_name" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <h4 class="mt-3">What image do you want to feature on the guidebook?</h4>
            @include('components.imagecomponent')
        </form>


    </div>
</div> --}}



<div class="col-xl-9 col-lg-8 col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('guidebooks.storeAddress') }}" method="POST">
                @csrf

                <div class=" mb-6">
                    <h4 class="mb-1">Search by address or business name
                    </h4>
                    <p>Based on your selection, we'll populate as much as we can in the fields below about this
                        location</p>
                </div>

                <div class="card shadow">
                    <div class="card-body">


                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" required class="form-control" placeholder="Address"
                                    id="address" name="address"
                                    value="{{ isset($guidebook->address) ? $guidebook->address : old('address') }}"></div>
                            @error('address')
                                <small style="color:red">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-6 mb-3 mb-lg-0">
                                <input type="text" class="form-control"
                                    value="{{ isset($guidebook->latitude) ? $guidebook->latitude :  old('latitude') }}"
                                    placeholder="Latitude" name="latitude" id="latitude" required="">
                                @error('latitude')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control"
                                    value="{{ isset($guidebook->longitude) ? $guidebook->longitude :  old('longitude') }}"
                                    placeholder="Longitude" name="longitude" id="longitude" required="">
                                    @error('Longitude')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                </div>
                        </div>

                    </div>
                </div>

                <div class=" mb-6 mt-3">
                    <h4 class="mb-1">Review the address below, do you need to add a prefix or apartment number?
                    </h4>

                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control"
                                    placeholder="Prefix/apartment no." id="apartment_no"
                                    value="{{ isset($guidebook->apartment_no) ? $guidebook->apartment_no :  old('apartment_no') }}"
                                    name="apartment_no" required="">

                                    @error('apartment_no')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control" placeholder="Street No."
                                    value="{{ isset($guidebook->street_no) ? $guidebook->street_no :  old('street_no') }}"
                                    id="street_number" name="street_number" required=""></div>

                                    @error('street_no')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                        </div>


                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control" placeholder="Street Name"
                                    id="street_name" name="street_name"
                                    
                                    value="{{ isset($guidebook->street_no) ? $guidebook->street_no :  old('street_name') }}" required="">
                                    @error('street_name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                </div>
                        </div>


                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control"
                                    value="{{ isset($guidebook->city) ? $guidebook->city :  old('city') }}"
                                    placeholder="City/ suburb *" id="city" name="city" required=""></div>
                                    @error('city')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                                </div>

                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control"
                                    value="{{ isset($guidebook->state) ? $guidebook->state :  old('state') }}" placeholder="State "
                                    id="state" name="state" required=""></div>
                                    @error('state')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                        </div>

                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control"
                                    value="{{ isset($guidebook->country) ? $guidebook->country :  old('country') }}"
                                    placeholder="Country *" id="country" name="country" required=""></div>

                                    @error('country')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                        </div>

                        <div class="mb-3 row">
                            <div class=" col-12"><input type="text" class="form-control"
                                    value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}"
                                    placeholder="Postal Code" id="postal_code" name="postal_code" required="">
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
                    <p>In the Arrival section of your guidebook, we construct a link to google maps for your guests.
                        Here
                        you can choose how that link is constructed.</p>
                </div>

                <div class="row">
                    <div class="col-md-8 col-12">
                        <select name="address_linking_rule" class="form-control form-select" id="country">
                            <option disabled selected class="text-muted">Address Linking Rule
                            </option>
                            <option
                                {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                value="automatic" class="text-dark">Automatic</option>
                            <option
                                {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'use_address' ? 'selected' : '' }}
                                value="use_address" class="text-dark">use address</option>
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
                                    <div class="mb-3 mb-lg-0 col-xl-2 col-lg-2 col-md-2 col-2">
                                        <span class="mdi mdi-map-marker rounded-circle avatar-md fs-2"></span>

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
                                    <div class="mb-3 mb-lg-0 col-xl-2 col-lg-2 col-md-2 col-2">
                                        <span class="mdi mdi-palette-swatch rounded-circle avatar-md fs-2"></span>

                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-8">
                                        <div class="row g-3 align-items-center row">
                                            <div class="col-xxl-12 col-md-12">
                                                <p> <a id="google_map_address" href=""></a>
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
                            <h4 class="mb-1">Name this guidebook so you can find it later
                            </h4>

                        </div>

                        <div class="mb-3 row">
                            <div class=" col-12 col-md-8"><input type="text" class="form-control"
                                    placeholder="Descriptive Name"
                                    value="{{ isset($guidebook->descriptive_name) ? $guidebook->descriptive_name :  old('descriptive_name') }}"
                                    id="descriptive_name" name="descriptive_name" required=""></div>
                                    @error('descriptive_name')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class=" mb-6 mt-3">
                            <h4 class="mb-1">What image do you want to feature on the guidebook?
                            </h4>
                        </div>


                    </div>
                </div>

                <div class="col-xl-3 col-md-12">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>

            </form>
        </div>
    </div>

</div>
