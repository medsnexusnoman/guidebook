@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Name this card so you can find it later</h4>
                                    <div class="mb-3 row">
                                        <div class=" col-12"><input type="text" class="form-control"
                                                placeholder="Card name" id="address" name="address" required=""></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>To create this card in different languages, choose them here</h4>
                                    <p>This will activate tabs for each language in the editors below</p>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Is wifi provided inside the property?</h4>
                                
                                    <div class="col-md-8 col-12">
                                        <div class="form-check-inline mt-2 form-check">
                                            <input name="customRadioInline" type="radio" id="customRadioInline1"
                                                class="form-check-input">
                                            <label for="customRadioInline1" class="form-check-label">Yes</label>
                                        </div>
                                        <div class="form-check-inline form-check">
                                            <input name="customRadioInline" type="radio" id="customRadioInline2"
                                                class="form-check-input">
                                            <label for="customRadioInline2" class="form-check-label">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                         
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>How do you want to tell guests the wifi password?
                                    </h4>

                                    <div class="mb-3 row">

                                        <div class="col-md-8 col-12">
                                            <div class="m-2">
                                                <div class="form-check ">
                                                    <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                        class="form-check-input">
                                                    <label for="customChecktellMe" class="form-check-label">Include it on this card</label>
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input name="customOpenEmail" type="checkbox" id="customOpenEmail"
                                                        class="form-check-input">
                                                    <label for="customOpenEmail" class="form-check-label">List it at the property</label>
                                                </div>
                                               

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Select the statements which best describe how you would like guests to resolve wifi issues:
                                    </h4>

                                    <div class="mb-3 row">

                                        <div class="col-md-8 col-12">
                                            <div class="m-2">
                                                <div class="form-check ">
                                                    <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                        class="form-check-input">
                                                    <label for="customChecktellMe" class="form-check-label">Reset the wifi themselves</label>
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input name="customOpenEmail" type="checkbox" id="customOpenEmail"
                                                        class="form-check-input">
                                                    <label for="customOpenEmail" class="form-check-label">Use a local cafe with wifi</label>
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input name="customShowDefault" type="checkbox"
                                                        id="customShowDefault" class="form-check-input">
                                                    <label for="customShowDefault" class="form-check-label">Contact their host</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Is there anything else you need to tell guests about using the wifi?
                                    </h4>
                                   
                                    <textarea id="summernote" name="content"></textarea>

                                </div>
                            </div>

                            @include('components.guidebook.other.guidebook_card')

                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </div>

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
            $('#summernote').summernote();
        });
    </script>
@endsection
