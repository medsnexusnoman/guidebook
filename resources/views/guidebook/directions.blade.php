@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            <form action="{{ route('guidebooks.storeDirection') }}" method="POST">
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

                                <input name="guidebook_id" value="{{ $guidebook->id }}" type="hidden">



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
                                                    @foreach ($direction as $key => $item)
                                                        <div class="col-md-4 col-12">
                                                            <div class="form-check mt-2">
                                                                <input name="directions[]" value="{{ $item->id }}"
                                                                    type="checkbox" id="d-{{ $key }}"
                                                                    class="form-check-input">
                                                                <label for="d-{{ $key }}"
                                                                    class="form-check-label">{{ $item->name }}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach

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

                                <div class="row mt-3 d-none" id="r_to_from_airport">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling to or from the airport?</h4>
                                        <textarea id="to_from_airport" name="to_from_airport"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_taxi">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by taxi?</h4>
                                        <textarea id="taxi" name="taxi"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_uber">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by uber?</h4>
                                        <textarea id="uber" name="uber"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_lyft">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by lyft?</h4>
                                        <textarea id="lyft" name="lyft"></textarea>
                                    </div>
                                </div>


                                <div class="row mt-3 d-none" id="r_bus">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by bus?</h4>
                                        <textarea id="bus" name="bus"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_train">
                                    <div class="col-12">
                                        <h4>
                                            What directions would you give guests travelling by train?</h4>
                                        <textarea id="train" name="train"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_ferry_boat">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by ferry-boat?</h4>
                                        <textarea id="ferry_boat" name="ferry_boat"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_pickup">
                                    <div class="col-12">
                                        <h4>What directions would you give guests who are getting picked up?</h4>
                                        <textarea id="pickup" name="pickup"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_driving">
                                    <div class="col-12">
                                        <h4>What directions would you give guests who are driving themselves?</h4>
                                        <textarea id="driving" name="driving"></textarea>
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
        $(document).ready(function() {
            $('#summernote').summernote();
            $('#to_from_airport').summernote();
        });
    </script>

    <script>
        document.getElementById('customChecktellMeSelectAll').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('input[name="directions[]"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById('customChecktellMeSelectAll').checked;
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.direction-checkbox');

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                const directionId = checkbox.value;
                const textareaId = 'r_' + directionId;

                const textarea = document.getElementById(textareaId);
                if (textarea) {
                    textarea.classList.toggle('d-none', !checkbox.checked);
                }
            });
        });
    });
</script>

@endsection
