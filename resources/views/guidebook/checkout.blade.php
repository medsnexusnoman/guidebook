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
                            <form action="{{ route('guidebooks.storeCheckout', ['id' => $guidebook->id]) }}" method="POST">
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
                                        <h4>What time do you want to tell guests to check out by?
                                        </h4>

                                        <div class=" col-12 col-md-3">
                                            <input type="time" class="form-control" placeholder="Card name"
                                                id="check_in" name="check_in" required="">

                                        </div>

                                    </div>
                                </div>


                           

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Select the statements that best describe your late checkout policy
                                        </h4>

                                        <div class="mb-3 row">

                                            <div class="col-md-8 col-12">
                                                @foreach ($checkout['policies'] as $key => $check)
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
                                        <h4>What should guests do before checking out?
                                        </h4>

                                        <div class="mb-3 row">

                                            <div class="col-md-8 col-12">
                                                @foreach ($checkout['before_checking'] as $key => $property)
                                                    <div class="m-2">
                                                        <div class="form-check ">
                                                            <input name="before_checking[]" value="{{ $property['id'] }}"
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
                                        <h4>Additional checkout information
                                        </h4>
                                       
                                        <textarea id="summernote" name="additional_checkout_information"></textarea>

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
