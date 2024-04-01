<div class="col-xl-9 col-lg-8 col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class=" mb-6">

                <div class="mb-6 col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="mb-4 card shadow rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">
                                Recommendations-only Version</h4>
                            <div class="row d-flex justify-content-center">
                                <div class="col-8">


                                    <div class="row">
                                        <div class="col-12">

                                            <h4>
                                                Do you want to enable a recommendations-only version of this guidebook?
                                            </h4>



                                            <div class="col-md-8 col-12">
                                                <div class="form-check-inline mt-2 form-check">
                                                    <input name="customRadioInline" type="radio"
                                                        id="customRadioInline1" class="form-check-input">
                                                    <label for="customRadioInline1" class="form-check-label">Yes</label>
                                                </div>
                                                <div class="form-check-inline form-check">
                                                    <input name="customRadioInline" type="radio"
                                                        id="customRadioInline2" class="form-check-input">
                                                    <label for="customRadioInline2" class="form-check-label">No</label>
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-12">

                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control"
                                                    placeholder="Recommendations-only title" id="title"
                                                    name="title" value="" required="">
                                                @error('title')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>



                                        </div>

                                    </div>




                                </div>

                                <div class="row mt-3  d-flex justify-content-center">
                                    <div class="col-8">


                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex">


                                                    <select name="" class="form-control form-select"
                                                        style="width: 100%;" id="dailyDigest">
                                                        <option disabled selected class="text-dark">Custom
                                                            recommendations-only URL key:</option>
                                                        <option value="One" class="text-dark">One</option>
                                                        <option value="Two" class="text-dark">Two</option>
                                                        <option value="Three" class="text-dark">Three</option>
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

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>
                                            Recommendations-only image:</h4>
                                    </div>
                                </div>
                                <div class="row d-flex ">
                                    <div class="col-3 offset-2">
                                        <img width="100%"
                                            src="https://storage.googleapis.com/hostfully-wp-1/blank-state-images.png" />
                                    </div>

                                    <div class="col-7">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target=".gd-example-modal-xl">Select Image</button>
                                        <div  class="modal fade gd-example-modal-xl" tabindex="-1" role="dialog"
                                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content" style="height: 80vh">
                                                    <div class="row m-5">
                                                        <div class="col-3">
                                                            <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                                role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="v-pills-home-tab"
                                                                    data-bs-toggle="pill" href="#v-pills-home"
                                                                    role="tab" aria-controls="v-pills-home"
                                                                    aria-selected="true">My Device</a>
                                                                <a class="nav-link" id="v-pills-profile-tab"
                                                                    data-bs-toggle="pill" href="#v-pills-profile"
                                                                    role="tab" aria-controls="v-pills-profile"
                                                                    aria-selected="false">Link</a>
                                                                <a class="nav-link" id="v-pills-messages-tab"
                                                                    data-bs-toggle="pill" href="#v-pills-messages"
                                                                    role="tab" aria-controls="v-pills-messages"
                                                                    aria-selected="false">Web Search</a>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-9">
                                                            <div class="tab-content p-4" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active"
                                                                    id="v-pills-home" role="tabpanel"
                                                                    aria-labelledby="v-pills-home-tab">...</div>
                                                                <div class="tab-pane fade" id="v-pills-profile"
                                                                    role="tabpanel"
                                                                    aria-labelledby="v-pills-profile-tab">
                                                                    <div class="input-group mb-3">
                                                                       
                                                                        <input type="text" class="form-control" placeholder="Enter a URL" aria-label="Username" aria-describedby="basic-addon1">
                                                                        <span class="input-group-text" id="basic-addon1">@</span>  
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-messages"
                                                                    role="tabpanel"
                                                                    aria-labelledby="v-pills-messages-tab">
                                                                    <div class="input-group mb-3">
                                                                       
                                                                        <input type="text" class="form-control" placeholder="Search images" aria-label="Username" aria-describedby="basic-addon1">
                                                                        <span class="input-group-text" id="basic-addon1">@</span>  
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

                                <div class="row mt-3  d-flex justify-content-center">
                                    <div class="col-8">


                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex">


                                                    <select name="" class="form-control form-select"
                                                        style="width: 100%;" id="dailyDigest">
                                                        <option disabled selected class="text-dark">
                                                            Recommendations-only
                                                            URL</option>
                                                        <option value="One" class="text-dark">One</option>
                                                        <option value="Two" class="text-dark">Two</option>
                                                        <option value="Three" class="text-dark">Three</option>
                                                    </select>
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
