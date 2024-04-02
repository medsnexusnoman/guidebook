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
                            <form action="{{ route('guidebooks.storeCheckins', ['id' => $guidebook->id]) }}" method="POST">
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
                                                <input name="customRadioInline" value="1" type="radio"
                                                    id="customRadioInline1" class="form-check-input">
                                                <label for="customRadioInline1" class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check-inline form-check">
                                                <input name="customRadioInline" type="radio" value="0"
                                                    id="customRadioInline2" class="form-check-input">
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
                                                @foreach ($checkin['early_check'] as $key => $check)
                                                    <div class="m-2">
                                                        <div class="form-check ">
                                                            <input name="early[]" type="checkbox" id="e-{{ $key }}"
                                                                value="{{ $check['id'] }}" class="form-check-input">
                                                            <label for="e-{{ $key }}"
                                                                class="form-check-label">{{ $check['name'] }}</label>
                                                        </div>


                                                    </div>
                                                @endforeach
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
                                                @foreach ($checkin['property'] as $key => $property)
                                                    <div class="m-2">
                                                        <div class="form-check ">
                                                            <input name="property[]" value="{{ $property['id'] }}"
                                                                type="checkbox" id="p-{{ $key }}"
                                                                class="form-check-input">
                                                            <label for="p-{{ $key }}"
                                                                class="form-check-label">{{ $property['name'] }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach



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
                                        <textarea id="summernote" name="order_to_gain_property"></textarea>

                                    </div>
                                </div>

                                @include('components.guidebook.other.guidebook_card')
                                
                                <div class="row">
                                    <div class="col-xl-3 col-md-12">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
