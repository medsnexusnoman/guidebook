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
                                    <h4>Select the statements that best describe your advice to guests about parking at the property
                                    </h4>

                                    <div class="mb-3 row">

                                        <div class="col-md-8 col-12">
                                            <div class="m-2">
                                                <div class="form-check ">
                                                    <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                        class="form-check-input">
                                                    <label for="customChecktellMe" class="form-check-label">Driveway parking available</label>
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input name="customOpenEmail" type="checkbox" id="customOpenEmail"
                                                        class="form-check-input">
                                                    <label for="customOpenEmail" class="form-check-label">On-Street parking available</label>
                                                </div>
                                                <div class="form-check mt-1">
                                                    <input name="customShowDefault" type="checkbox" id="customShowDefault"
                                                        class="form-check-input">
                                                    <label for="customShowDefault" class="form-check-label">Economical parking available</label>
                                                </div>

                                                <div class="form-check mt-1">
                                                    <input name="customShowDefault" type="checkbox" id="customShowDefault"
                                                        class="form-check-input">
                                                    <label for="customShowDefault" class="form-check-label">Parking is expensive nearby</label>
                                                </div>

                                               

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>

                           

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h4>What other information does your guest need to know if they are going to park a vehicle during their stay?
                                    </h4>
                                    <p>You can add images in this area. You can add other languages at the top of this form
                                    </p>
                                    <textarea id="summernote" name="content"></textarea>

                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <h4>Which guidebooks should this card appear on?
                                    </h4>
                                    <p>Note: Selecting a guidebook here will remove any other card of this type from that guidebook.

                                    </p>
                                   
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
