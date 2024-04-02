@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-7">
            <div class="card mb-5 shadow b-0">
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
                            <a class="nav-link active" id="pills-alert-simple-html-tab1" data-bs-toggle="pill"
                                href="#pills-alert-simple-html1" role="tab" aria-controls="pills-alert-simple-html1"
                                aria-selected="true">Departure
                            </a>
                        </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content p-4" id="pills-tabContent-alert-simple">
                        <div class="tab-pane tab-example-design fade" id="pills-alert-simple-design" role="tabpanel"
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
                                               
                                                placeholder="Pick uo from which airport? * " id="state" name="state" required=""></div>
                                        @error('state')
                                            <small style="color:red">{{ $message }}</small>
                                        @enderror

                                        <div class="col-md-6 col-12">
                                            <select name="address_linking_rule" class="form-control form-select" id="country">
                                                <option disabled selected class="text-muted">Terminal
                                                </option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                                    value="automatic" class="text-dark">Automatic</option>
                                                <option
                                                   
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

                                    <div class="mb-3 row">
                                       

                                        <div class="col-md-6 col-12">
                                            <select name="address_linking_rule" class="form-control form-select" id="country">
                                                <option disabled selected class="text-muted">Passengers
                                                </option>
                                                <option
                                                    {{ isset($guidebook->address_linking_rule) && $guidebook->address_linking_rule == 'automatic' ? 'selected' : '' }}
                                                    value="automatic" class="text-dark">Automatic</option>
                                                <option
                                                   
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

                                </div>
                            </div>





                        </div>
                    </div>




                    <div class="tab-pane tab-example-html fade active show" id="pills-alert-simple-html1" role="tabpanel"
                        aria-labelledby="pills-alert-simple-html-tab1">
                        <div class="code-toolbar">

                            <div class="row m-2">
                                <div class="col-12">
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
