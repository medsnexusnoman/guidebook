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
                                    <h4>Provide general directions to the property
                                    </h4>
                                    <p>The guest will see this information at the top of the directions card, directly below
                                        the address</p>
                                </div>

                                <textarea id="summernote" name="content"></textarea>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Select the methods you would like to include specific directions for
                                    </h4>
                                    <p>Each of these items will be presented under the heading "Recommended approaches"</p>

                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">To/from
                                                    airport</label>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Taxi</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Uber</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Lyft</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Bus</label>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Train</label>
                                            </div>


                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2 ">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Ferry-boat</label>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Pickup</label>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Driving</label>
                                            </div>

                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-check mt-2">
                                                <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                    class="form-check-input">
                                                <label for="customChecktellMe" class="form-check-label">Select all</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>Which guidebooks should this card appear on?
                                    </h4>
                                    <p>Note: Selecting a guidebook here will remove any other card of this type from that guidebook.</p>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();


        });
    </script>
@endsection
