@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">

        <div class="p-6 container-fluid">

            <div class="row ">
                <div class="col-12">
                    <div class="card p-md-6 p-3">
                        <div class="card-body">
                            @if (session()->has('success'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session()->get('success')}}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            
                            <form action="{{ route('guidebooks.storeDirection',['id'=>$guidebook->id]) }}" method="POST">
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
                                        <h4>Select the methods you would like to include specific directions for</h4>
                                        <p>Each of these items will be presented under the heading "Recommended approaches"</p>
                                        <div class="row">
                                            @foreach ($direction as $key => $item)
                                                <div class="col-md-4 col-12">
                                                    <div class="form-check mt-2">
                                                        <input name="directions[]" value="{{ $item->id }}" type="checkbox" id="d-{{ $key }}" class="form-check-input direction-checkbox">
                                                        <label for="d-{{ $key }}" class="form-check-label">{{ $item->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-check mt-2">
                                                        <input type="checkbox" id="customChecktellMeSelectAll" class="form-check-input">
                                                        <label for="customChecktellMeSelectAll" class="form-check-label">Select all</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_1">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling to or from the airport?</h4>
                                        <textarea id="to_from_airport" name="to_from_airport"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_2">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by taxi?</h4>
                                        <textarea id="taxi" name="taxi"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_3">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by uber?</h4>
                                        <textarea id="uber" name="uber"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 d-none" id="r_4">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by lyft?</h4>
                                        <textarea id="lyft" name="lyft"></textarea>
                                    </div>
                                </div>


                                <div class="row mt-3 d-none" id="r_5">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by bus?</h4>
                                        <textarea id="bus" name="bus"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_6">
                                    <div class="col-12">
                                        <h4>
                                            What directions would you give guests travelling by train?</h4>
                                        <textarea id="train" name="train"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_7">
                                    <div class="col-12">
                                        <h4>What directions would you give guests travelling by ferry-boat?</h4>
                                        <textarea id="ferry_boat" name="ferry_boat"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_8">
                                    <div class="col-12">
                                        <h4>What directions would you give guests who are getting picked up?</h4>
                                        <textarea id="pickup" name="pickup"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 d-none" id="r_9">
                                    <div class="col-12">
                                        <h4>What directions would you give guests who are driving themselves?</h4>
                                        <textarea id="driving" name="driving"></textarea>
                                    </div>
                                </div>


                                @include('components.guidebook.other.guidebook_card')

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
            $('#to_from_airport, #taxi, #uber, #lyft, #bus, #train, #ferry_boat, #pickup, #driving').summernote();
        });
    </script>

    <script>
    //     document.getElementById('customChecktellMeSelectAll').addEventListener('change', function() {
    //         var checkboxes = document.querySelectorAll('input[name="directions[]"]');
    //         checkboxes.forEach(function(checkbox) {
    //             checkbox.checked = document.getElementById('customChecktellMeSelectAll').checked;
    //         });
    //     });
    </script>

     <script>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         const checkboxes = document.querySelectorAll('.direction-checkbox');

    //         checkboxes.forEach(function(checkbox) {
    //             checkbox.addEventListener('change', function() {
    //                 const directionId = checkbox.value;
    //                 const textareaId = 'r_' + directionId;

    //                 const textarea = document.getElementById(textareaId);
    //                 if (textarea) {
    //                     textarea.classList.toggle('d-none', !checkbox.checked);
    //                 }
    //             });
    //         });
    //     });
    
    document.addEventListener("DOMContentLoaded", function() {
    // Select all checkbox
    const selectAllCheckbox = document.getElementById("customChecktellMeSelectAll");
    // Individual direction checkboxes
    const directionCheckboxes = document.querySelectorAll(".direction-checkbox");

    // Event listener for select all checkbox
    selectAllCheckbox.addEventListener("change", function() {
        directionCheckboxes.forEach(function(checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });
        toggleTextareas();
    });

    // Event listeners for individual direction checkboxes
    directionCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener("change", toggleTextareas);
    });

    // Function to toggle visibility of textareas based on checkbox state
    function toggleTextareas() {
    directionCheckboxes.forEach(function(checkbox) {
        const directionId = checkbox.value;
        const textarea = document.getElementById("r_" + directionId);
        if (textarea) {
            if (checkbox.checked) {
                textarea.classList.remove("d-none");
            } else {
                textarea.classList.add("d-none");
            }
        }
    });
}
});
    </script>

<script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function () {
        const searchText = this.value.toLowerCase();
        const guidebooks = document.querySelectorAll('.guidebook');
        
        guidebooks.forEach(guidebook => {
            const text = guidebook.textContent.toLowerCase();
            if (text.includes(searchText)) {
                guidebook.style.display = 'block';
            } else {
                guidebook.style.display = 'none';
            }
        });
    });

    // Select all functionality
    document.getElementById('selectAll').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('.checkboxItem');
        checkboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

</script>
@endsection
