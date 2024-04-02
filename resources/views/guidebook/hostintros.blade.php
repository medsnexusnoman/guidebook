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
                                    <strong>{{ session()->get('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ route('guidebooks.storeHostIntro', ['id' => $guidebook->id]) }}" method="POST">
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

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>What name should guests use to address this host?
                                        </h4>

                                        <div class="mb-3 row">
                                            <div class=" col-12"><input type="text" class="form-control"
                                                    {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}" --}} placeholder="Host name *" id="host_name"
                                                    name="host_name" required="">
                                                @error('host_name')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>How should guests contact this host if they need to?
                                        </h4>

                                        <div class="mb-3 row">
                                            <div class=" col-12 col-md-6"><input type="text" class="form-control"
                                                    {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}" --}} placeholder="Host phone" id="phone"
                                                    name="phone" required="">
                                                @error('phone')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class=" col-12 col-md-6"><input type="email" class="form-control"
                                                    {{-- value="{{ isset($guidebook->postal_code) ? $guidebook->postal_code :  old('postal_code') }}" --}} placeholder="Host email *" id="email"
                                                    name="email" required="">
                                                @error('email')
                                                    <small style="color:red">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>





                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>How would this host introduce themselves, and your business, to your guests?
                                        </h4>
                                        <p>Do not include any secure information in this field, as this info will be seen by
                                            guests who are NOT viewing the guidebook securely.

                                        </p>
                                        <textarea id="summernote" name="park_a_vehicle"></textarea>

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">


                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Create a landing page
                                                </h4>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row d-flex align-items-baseline">

                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input " type="checkbox"
                                                                        value="" id="selectAll">
                                                                    <label class="form-check-label ms-2" for="selectAll">
                                                                        Show landing page to new visitors
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
