@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 pt-6 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 ">
                    <h3 class="mb-0 fw-bold">Guidebook</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row g-2">
                            <div class="col-lg-6 col-md-5 d-grid d-lg-block">
                                <a href="{{ route('guidebooks.create') }}" class="btn btn-primary">Add Guidebook</a>
                            </div>
                            <div class="col-md-7 col-lg-4">
                                <input type="search" class="form-control w-100" placeholder="Search for Guidebook">
                            </div>
                            <div class="col-lg-2 d-flex">
                                <select class="form-select">
                                    <option disabled>Status</option>
                                    <option value="1" selected>All</option>
                                    <option value="2">Published</option>
                                    <option value="3">Draft</option>
                                </select>
                                <a href="#!" class="btn btn-danger-soft  btn-icon ms-2 texttooltip"
                                    data-template="trashOne">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-trash-2 icon-xs">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> --}}
                                    <div id="trashOne" class="d-none">
                                        <span>Delete</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table text-nowrap mb-0 table-centered">
                                <thead class="table-light">

                                </thead>
                                <tbody>
                                    @foreach ($guidebooks as $guidebook)
                                        <tr>

                                            <td class="ps-1">
                                                <div class="d-flex align-items-center aligin-items-center">
                                                    <a href="#!"><img
                                                            src="https://w7.pngwing.com/pngs/753/432/png-transparent-user-profile-2018-in-sight-user-conference-expo-business-default-business-angle-service-people-thumbnail.png"
                                                            alt="Image" class="avatar avatar-sm rounded-circle"></a>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0"> <a href="#!" class="text-inherit">{{$guidebook->descriptive_name}}</a></h5>
                                                        <p>Share This</p>
                                                    </div>
                                                </div>
                                            </td>


                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer d-md-flex justify-content-between align-items-center ">
                        <span>Showing 1 to 1 of 1 entries</span>
                        <nav class="mt-2 mt-md-0">
                            <ul class="pagination mb-0 ">
                                <li class="page-item">
                                    <a class="page-link" href="#!">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#!">1</a>
                                </li>
                                {{-- <li class="page-item">
                        <a class="page-link" href="#!">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#!">3</a>
                      </li> --}}
                                <li class="page-item">
                                    <a class="page-link" href="#!">Next</a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
