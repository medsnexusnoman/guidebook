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
                        
                            <form action="{{route('guidebooks.storeParking',['id'=>$guidebook->id])}}" method="POST">
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
                                        <h4>To create this card in different languages, choose them here</h4>
                                        <p>This will activate tabs for each language in the editors below</p>
                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>Select the statements that best describe your advice to guests about parking at
                                            the
                                            property
                                        </h4>

                                        <div class="mb-3 row">

                                            <div class="col-md-8 col-12">
                                                @foreach ($parking['property'] as $key => $item)
                                                    <div class="m-2">
                                                        <div class="form-check ">
                                                            <input name="parking_property[]" type="checkbox"
                                                                id="pa-{{ $key }}" class="form-check-input"
                                                                value="{{ $item['id'] }}">
                                                            <label for="pa-{{ $key }}"
                                                                class="form-check-label">{{ $item['name'] }}</label>
                                                        </div>


                                                    </div>
                                                @endforeach


                                            </div>

                                        </div>

                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h4>What other information does your guest need to know if they are going to park a
                                            vehicle during their stay?
                                        </h4>
                                        <p>You can add images in this area. You can add other languages at the top of this
                                            form
                                        </p>
                                        <textarea id="summernote" name="park_a_vehicle"></textarea>

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
