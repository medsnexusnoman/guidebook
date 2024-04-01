<div class="col-xl-9 col-lg-8 col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class=" mb-6">

                <div class="mb-6 col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="mb-4 card shadow rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">
                                Arrival cards</h4>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">

                                
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="d-flex">
                                                <span
                                                    class=" mdi mdi-clock-outline rounded-circle avatar-md fs-2"></span>
                                                   
                                                <select name="" class="form-control form-select"
                                                    style="width: 100%;" id="dailyDigest">
                                                    <option disabled selected>Check-in card</option>
                                                    @foreach ($data['check_in_card'] as $item)
                                                  
                                                        <option value="{{$item->id}}" class="text-dark">{{$item->name_of_the_card}}</option>
                                                    @endforeach
                                                  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <a class="text-muted text-primary-hover me-3" href="{{route('guidebooks.createCheckin',$guidebook->id)}}">
                                                <span class="mdi mdi-plus fs-2"></span>
                                            </a>
                                            <a class="text-muted text-primary-hover" href="/pages/profile#">
                                                <span class="mdi mdi-pencil fs-2"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-8">
                                            <div class="d-flex">
                                                <span
                                                    class="mdi mdi-map-marker rounded-circle avatar-md fs-2"></span>

                                                <select name="" class="form-control form-select"
                                                    style="width: 100%;" id="dailyDigest">
                                                    <option disabled selected>Directions card</option>
                                                    @foreach ($data['direction'] as $item)
                                                  
                                                        <option value="{{$item->id}}" class="text-dark">{{$item->name_of_the_card}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a class="text-muted text-primary-hover me-3" href="{{route('guidebooks.createDirection',$guidebook->id)}}">
                                                <span class="mdi mdi-plus fs-2"></span>
                                            </a>
                                            <a class="text-muted text-primary-hover" href="/pages/profile#">
                                                <span class="mdi mdi-pencil fs-2"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row  mt-2">
                                        <div class="col-8">
                                            <div class="d-flex">
                                                <span
                                                    class="mdi mdi-parking rounded-circle avatar-md fs-2"></span>

                                                <select name="" class="form-control form-select"
                                                    style="width: 100%;" id="dailyDigest">
                                                    <option disabled selected>Parking card</option>
                                                    @foreach ($data['parking_card'] as $item)
                                                  
                                                        <option value="{{$item->id}}" class="text-dark">{{$item->name_of_the_card}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a class="text-muted text-primary-hover me-3" href="/pages/profile#">
                                                <span class="mdi mdi-plus fs-2"></span>
                                            </a>
                                            <a class="text-muted text-primary-hover" href="/pages/profile#">
                                                <span class="mdi mdi-pencil fs-2"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row  mt-2">
                                        <div class="col-8">
                                            <div class="d-flex">
                                                <span
                                                    class="mdi mdi-wifi rounded-circle avatar-md fs-2"></span>

                                                <select name="" class="form-control form-select"
                                                    style="width: 100%;" id="dailyDigest">
                                                    <option disabled selected>Wifi card</option>
                                                    <option value="One" class="text-dark">One</option>
                                                  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a class="text-muted text-primary-hover me-3" href="/pages/profile#">
                                                <span class="mdi mdi-plus fs-2"></span>
                                            </a>
                                            <a class="text-muted text-primary-hover" href="/pages/profile#">
                                                <span class="mdi mdi-pencil fs-2"></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="mb-6 col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="mb-4 card shadow rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">
                                Departure cards</h4>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">

                                
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="d-flex">
                                                <span
                                                    class="mdi mdi-lock rounded-circle avatar-md fs-2"></span>

                                                <select name="" class="form-control form-select"
                                                    style="width: 100%;" id="dailyDigest">
                                                    <option disabled selected>Checkout card</option>
                                                    @foreach ($data['departure_card'] as $item)
                                                  
                                                        <option value="{{$item->id}}" class="text-dark">{{$item->name_of_the_card}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <a class="text-muted text-primary-hover me-3" href="{{route('guidebooks.createCheckout',$guidebook->id)}}">
                                                <span class="mdi mdi-plus fs-2"></span>
                                            </a>
                                            <a class="text-muted text-primary-hover" href="/pages/profile#">
                                                <span class="mdi mdi-pencil fs-2"></span>
                                            </a>
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
