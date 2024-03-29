@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            <form action="{{route('guidebooks.storeDirection')}}" method="POST">
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

                                <input name="guidebook_id" value="{{$guidebook->id}}" type="hidden">
                              


                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Provide general directions to the property
                                        </h4>
                                        <p>The guest will see this information at the top of the directions card, directly
                                            below
                                            the address</p>
                                    </div>

                                    <textarea id="summernote" name="general_direction"></textarea>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Select the methods you would like to include specific directions for
                                        </h4>
                                        <p>Each of these items will be presented under the heading "Recommended approaches"
                                        </p>

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h4>Select the methods you would like to include specific directions for
                                                </h4>
                                                <p>Each of these items will be presented under the heading "Recommended
                                                    approaches"</p>
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeAirport" class="form-check-input">
                                                            <label for="customChecktellMeAirport"
                                                                class="form-check-label">To/from airport</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeTaxi" class="form-check-input">
                                                            <label for="customChecktellMeTaxi"
                                                                class="form-check-label">Taxi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeUber" class="form-check-input">
                                                            <label for="customChecktellMeUber"
                                                                class="form-check-label">Uber</label>
                                                        </div>
                                                    </div>
                                                    <!-- Repeat the structure for other checkboxes -->
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeLyft" class="form-check-input">
                                                            <label for="customChecktellMeLyft"
                                                                class="form-check-label">Lyft</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeBus" class="form-check-input">
                                                            <label for="customChecktellMeBus"
                                                                class="form-check-label">Bus</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeTrain" class="form-check-input">
                                                            <label for="customChecktellMeTrain"
                                                                class="form-check-label">Train</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[]" value="1" type="checkbox"
                                                                id="customChecktellMeFerry" class="form-check-input">
                                                            <label for="customChecktellMeFerry"
                                                                class="form-check-label">Ferry-boat</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[][Pickup][value]" value="1" type="checkbox"
                                                                id="customChecktellMePickup" class="form-check-input">
                                                            <label for="customChecktellMePickup"
                                                                class="form-check-label">Pickup</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-check mt-2">
                                                            <input name="methodCheckbox[][Driving][value]" value="1" type="checkbox"
                                                                id="customChecktellMeDriving" class="form-check-input">
                                                            <label for="customChecktellMeDriving"
                                                                class="form-check-label">Driving</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="form-check mt-2">
                                                                <input type="checkbox" id="customChecktellMeSelectAll"
                                                                    class="form-check-input">
                                                                <label for="customChecktellMeSelectAll"
                                                                    class="form-check-label">Select all</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Which guidebooks should this card appear on?
                                        </h4>
                                        <p>Note: Selecting a guidebook here will remove any other card of this type from
                                            that
                                            guidebook.</p>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save </button>
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

    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectAllCheckbox = document.getElementById("customChecktellMeSelectAll");
            const checkboxContainer = document.getElementById("checkboxContainer");

            selectAllCheckbox.addEventListener("change", function() {
                const methodCheckboxes = document.querySelectorAll("input[name='methodCheckbox']");
                methodCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });

            const methodCheckboxes = document.querySelectorAll("input[name='methodCheckbox']");
            methodCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    const methodName = this.id.replace("customChecktellMe", "");
                    const existingSummernote = document.getElementById(`summernote-${methodName}`);

                    if (this.checked) {
                        if (!existingSummernote) {
                            const newSummernote = document.createElement("textarea");
                            newSummernote.id = `summernote-${methodName}`;
                            newSummernote.name = `directions-${methodName}`;
                            checkboxContainer.appendChild(newSummernote);
                            $(`#summernote-${methodName}`).summernote(); // Initialize Summernote
                        }
                    } else {
                        if (existingSummernote) {
                            existingSummernote.parentNode.removeChild(existingSummernote);
                        }
                    }
                });
            });

            // Initialize Summernote for existing fields
            $(document).ready(function() {
                $('textarea[id^="summernote"]').summernote();
            });
        });
    </script>
@endsection
