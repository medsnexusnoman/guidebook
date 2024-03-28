@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-5 px-6">
        <div class="row my-3">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <div>
                        <a href="{{route('guidebooks.create')}}" class="btn btn-white">Add Guidebook</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card h-100">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4">
                        <h4 class="mb-0">Teams </h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Last Activity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-2.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Anita Parmar</h5>
                                                <p class="mb-0">anita@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Front End Developer</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamOne">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-1.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Jitu Chauhan</h5>
                                                <p class="mb-0">jituchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Project Director </td>
                                    <td class="align-middle">Today</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamTwo" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamTwo">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-3.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Sandeep Chauhan</h5>
                                                <p class="mb-0">sandeepchauhan@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Full- Stack Developer</td>
                                    <td class="align-middle">Yesterday</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamThree" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamThree">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-4.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Amanda Darnell</h5>
                                                <p class="mb-0">amandadarnell@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Digital Marketer</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamFour" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFour">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-5.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>

                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Patricia Murrill</h5>
                                                <p class="mb-0">patriciamurrill@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">Account Manager</td>
                                    <td class="align-middle">3 May, 2023</td>
                                    <td class="align-middle">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamFive" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamFive">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <img src="{{ asset('admin_assets/images/avatar/avatar-6.jpg') }}"
                                                    alt="" class="avatar-md avatar rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Darshini Nair</h5>
                                                <p class="mb-0">darshininair@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">Front End Developer</td>
                                    <td class="align-middle border-bottom-0">3 May, 2023</td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="dropdown dropstart">
                                            <a class="text-muted text-primary-hover" href="#" role="button"
                                                id="dropdownTeamSix" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="icon-xxs" data-feather="more-vertical"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownTeamSix">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
