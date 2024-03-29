@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            <form>
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

                                {{-- <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>To create this card in different languages, choose them here</h4>
                                        <p>This will activate tabs for each language in the editors below</p>
                                    </div>
                                </div> --}}


                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>When is the earliest time guests can check in?
                                        </h4>
                                        <p>This will activate tabs for each language in the editors below</p>

                                        <div class=" col-12 col-md-3">
                                            <input type="time" class="form-control" placeholder="Card name"
                                                id="check_in" name="check_in" required="">

                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Do you want a check-in window instead of a single time?</h4>
                                        <p>This will activate tabs for each language in the editors below</p>
                                        <div class="col-md-8 col-12">
                                            <div class="form-check-inline mt-2 form-check">
                                                <input name="customRadioInline" value="1" type="radio" id="customRadioInline1"
                                                    class="form-check-input">
                                                <label for="customRadioInline1" class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <input name="customRadioInline" type="radio" value="0" id="customRadioInline2"
                                                    class="form-check-input">
                                                <label for="customRadioInline2" class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>When is the latest time guests can check in?
                                        </h4>

                                        <div class=" col-12  col-md-3">
                                            <input type="time" class="form-control" placeholder="Card name"
                                                id="check_in" name="check_in" required="">

                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Select the statements that best describe your policy on early check-in
                                        </h4>

                                        <div class="mb-3 row">

                                            <div class="col-md-8 col-12">
                                                <div class="m-2">
                                                    <div class="form-check ">
                                                        <input name="customChecktellMe" type="checkbox"
                                                            id="customChecktellMe" class="form-check-input">
                                                        <label for="customChecktellMe"
                                                            class="form-check-label">Unfortunately we
                                                            cannot accommodate checking in before this time.</label>
                                                    </div>
                                                    <div class="form-check mt-1">
                                                        <input name="customOpenEmail" type="checkbox" id="customOpenEmail"
                                                            class="form-check-input">
                                                        <label for="customOpenEmail" class="form-check-label">Occasionally
                                                            we
                                                            accommodate checking in at other times, if you contact
                                                            us.</label>
                                                    </div>
                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">We are happy
                                                            to
                                                            arrange alternative check-in times, if you contact us.</label>
                                                    </div>

                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">We are happy
                                                            to
                                                            You can store your bags in the listing all day.</label>
                                                    </div>

                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">Enter your
                                                            own
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Select the statements that best describe how your guests will gain access to the
                                            property
                                        </h4>

                                        <div class="mb-3 row">

                                            <div class="col-md-8 col-12">
                                                <div class="m-2">
                                                    <div class="form-check ">
                                                        <input name="customChecktellMe" type="checkbox"
                                                            id="customChecktellMe" class="form-check-input">
                                                        <label for="customChecktellMe" class="form-check-label">There is a
                                                            lockbox containing your house key.</label>
                                                    </div>
                                                    <div class="form-check mt-1">
                                                        <input name="customOpenEmail" type="checkbox"
                                                            id="customOpenEmail" class="form-check-input">
                                                        <label for="customOpenEmail" class="form-check-label">We'll be
                                                            there
                                                            to meet you, if not contact me on arrival.</label>
                                                    </div>
                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">We will
                                                            email
                                                            you the access codes prior to your arrival.</label>
                                                    </div>

                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">Check your
                                                            email for check-in instructions.</label>
                                                    </div>

                                                    <div class="form-check mt-1">
                                                        <input name="customShowDefault" type="checkbox"
                                                            id="customShowDefault" class="form-check-input">
                                                        <label for="customShowDefault" class="form-check-label">We have
                                                            keyless entry.
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>What information does your guest need to know in order to gain access to the
                                            property?
                                        </h4>
                                        <p>Do not include any secure information in this field, as this info will be seen by
                                            guests who are NOT viewing the guidebook securely.
                                        </p>
                                        <textarea id="summernote" name="content"></textarea>

                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-12">
                                        <h4>Which guidebooks should this card appear on?
                                        </h4>
                                        <p>Note: Selecting a guidebook here will remove any other card of this type from
                                            that guidebook.

                                        </p>

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
            $('#summernote').summernote();
        });
    </script>
@endsection
