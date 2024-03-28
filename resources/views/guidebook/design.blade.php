@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-5 px-6">
        <div class="p-6 container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="border-bottom pb-4 mb-4 ">
                        <h3 class="mb-0 fw-bold">Guidebook</h3>
                    </div>
                </div>
            </div>
            <div class="mb-8 row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Guidebook Address, Name, and Image</h4>
                        <p class="mb-0 fs-5 text-muted">Name your guidebook and locate it on the map </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class=" mb-6">
                                <h4 class="mb-1">General Settings</h4>
                            </div>
                            <div class="align-items-center mb-8 row">
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <h5 class="mb-0">Avatar</h5>
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="/images/avatar/avatar-5.jpg" alt=""
                                                class="rounded-circle avatar avatar-lg">
                                        </div>
                                        <div>
                                            <button type="submit" class="me-2 btn btn-outline-white">Change </button>
                                            <button type="submit" class="btn btn-outline-white">Remove </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8 row">
                                <div class="mb-3 mb-md-0 col-md-3">
                                    <h5 class="mb-0">Cover photo</h5>
                                </div>
                                <div class="col-md-9">
                                    <div>
                                        <form action="#" class="dropzone mb-3 py-10 border-dashed">
                                            <section class="container">
                                                <div role="presentation" tabindex="0" class="dropzone">
                                                    <input accept="" multiple="" type="file" tabindex="-1"
                                                        style="display: none;">
                                                    <p class="text-center">Drag 'n' drop some files here, or click to select
                                                        files</p>
                                                </div>
                                                <aside style="display: flex; flex-flow: wrap; margin-top: 16px;"></aside>
                                            </section>
                                        </form>
                                        <button type="submit" class="btn btn-outline-white">Change </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mb-6">
                                    <h4 class="mb-1">Basic information</h4>
                                </div>
                                <form class="">
                                    <div class="mb-3 row">
                                        <label for="fullName" class="col-sm-4 col-form-label form-label">Full name</label>
                                        <div class="col-sm-4 mb-3 mb-lg-0">
                                            <input type="text" class="form-control" placeholder="First name"
                                                id="fullName" required="">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="Last name"
                                                id="lastName" required="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label form-label">Email</label>
                                        <div class="col-md-8 col-12">
                                            <input type="email" class="form-control" placeholder="Email" id="email"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 form-label" for="phone">Phone <span
                                                class="text-muted">(Optional)</span>
                                        </label>
                                        <div class="col-md-8 col-12">
                                            <input placeholder="Enter Phone" type="text" id="phone"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 form-label" for="country">Location</label>
                                        <div class="col-md-8 col-12">
                                            <select name="" class="form-control form-select" id="country">
                                                <option value="" class="text-muted">Select Country</option>
                                                <option value="India" class="text-dark">India</option>
                                                <option value="US" class="text-dark">US</option>
                                                <option value="UK" class="text-dark">UK</option>
                                                <option value="UAE" class="text-dark">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 form-label" for="addressLine">Address line 1</label>
                                        <div class="col-md-8 col-12">
                                            <input placeholder="Enter Address line 1" required="" type="text"
                                                id="addressLine" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 form-label" for="addressLineTwo">Address line 2</label>
                                        <div class="col-md-8 col-12">
                                            <input placeholder="Enter Address line 2" required="" type="text"
                                                id="addressLineTwo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="align-items-center row">
                                        <label class="col-sm-4 form-label" for="zipcode">Zip code <i
                                                class="fe fe-info fs-4 me-2 text-muted icon-xs"></i>
                                        </label>
                                        <div class="col-md-8 col-12">
                                            <input placeholder="Enter Zip code" required="" type="text"
                                                id="zipcode" class="form-control">
                                        </div>
                                        <div class="mt-4 col-md-8 col-12 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8 row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Email Setting</h4>
                        <p class="mb-0 fs-5 text-muted">Add an email settings to profile </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div id="edit" class="card">
                        <div class="card-body">
                            <div class="mb-6">
                                <h4 class="mb-1">Email</h4>
                            </div>
                            <form class="">
                                <div class="mb-3 row">
                                    <label class="col-sm-4 form-label" for="newEmailAddress">New email</label>
                                    <div class="col-md-8 col-12">
                                        <input placeholder="Enter your email address" required="" type="email"
                                            id="newEmailAddress" class="form-control">
                                    </div>
                                    <div class="mt-3 col-md-8 col-12 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <div class="mb-6 mt-6">
                                <h4 class="mb-1">Change your password</h4>
                            </div>
                            <form class="">
                                <div class="mb-3 row">
                                    <label class="col-sm-4 form-label" for="currentPassword">Current password</label>
                                    <div class="col-md-8 col-12">
                                        <input placeholder="Enter Current password" required="" type="password"
                                            id="currentPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-4 form-label" for="newPassword">New password</label>
                                    <div class="col-md-8 col-12">
                                        <input placeholder="Enter New password" required="" type="password"
                                            id="newPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="align-items-center row">
                                    <label class="col-sm-4 form-label" for="confirmNewpassword">Confirm new
                                        password</label>
                                    <div class="col-md-8 col-12">
                                        <input placeholder="Confirm new password" required="" type="password"
                                            id="confirmNewpassword" class="form-control">
                                    </div>
                                    <div class="mt-4 col-md-8 col-12 offset-md-4">
                                        <h6 class="mb-1">Password requirements:</h6>
                                        <p>Ensure that these requirements are met:</p>
                                        <ul>
                                            <li> Minimum 8 characters long the more, the better</li>
                                            <li>At least one lowercase character</li>
                                            <li>At least one uppercase character</li>
                                            <li>At least one number, symbol, or whitespace character</li>
                                        </ul>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8 row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Preferences</h4>
                        <p class="mb-0 fs-5 text-muted">Configure your preferences </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div id="preferences" class="card">
                        <div class="card-body">
                            <div class="mb-6">
                                <h4 class="mb-1">Preferences</h4>
                            </div>
                            <form class="">
                                <div class="mb-3 row">
                                    <label class="col-md-4 form-label" for="langauge">Langauge</label>
                                    <div class="col-md-8 col-12">
                                        <select name="" class="form-control form-select" id="langauge">
                                            <option value="" class="text-muted">Select Langauge</option>
                                            <option value="English" class="text-dark">English</option>
                                            <option value="Hindi" class="text-dark">Hindi</option>
                                            <option value="Spanish" class="text-dark">Spanish</option>
                                            <option value="Arabic" class="text-dark">Arabic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-4 form-label" for="timeZone">Time Zone</label>
                                    <div class="col-md-8 col-12">
                                        <select name="" class="form-control form-select" id="timeZone">
                                            <option value="" class="text-muted">Select Langauge</option>
                                            <option value="GMT +5.30" class="text-dark">GMT +5.30</option>
                                            <option value="GMT +5.30" class="text-dark">GMT +5.30</option>
                                            <option value="GMT +5.30" class="text-dark">GMT +5.30</option>
                                            <option value="GMT +5.30" class="text-dark">GMT +5.30</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-4 form-label" for="dateFormat">Date Format</label>
                                    <div class="col-md-8 col-12">
                                        <select name="" class="form-control form-select" id="dateFormat">
                                            <option value="" class="text-muted">Select Langauge</option>
                                            <option value="No Preference" class="text-dark">No Preference</option>
                                            <option value="Preference" class="text-dark">Preference</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-4 form-label" for="default">Default</label>
                                    <div class="col-md-8 col-12">
                                        <div class="form-check-inline form-check">
                                            <input name="customRadioInline" type="radio" id="customRadioInline1"
                                                class="form-check-input">
                                            <label for="customRadioInline1" class="form-check-label">On</label>
                                        </div>
                                        <div class="form-check-inline form-check">
                                            <input name="customRadioInline" type="radio" id="customRadioInline2"
                                                class="form-check-input">
                                            <label for="customRadioInline2" class="form-check-label">Off</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div for="default" class="form-label col-md-4">Choose option default</div>
                                    <div class="col-md-8 col-12">
                                        <div class="form-check">
                                            <input name="customChecktellMe" type="checkbox" id="customChecktellMe"
                                                class="form-check-input">
                                            <label for="customChecktellMe" class="form-check-label">Tell me</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="customOpenEmail" type="checkbox" id="customOpenEmail"
                                                class="form-check-input">
                                            <label for="customOpenEmail" class="form-check-label">Open e-mail</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="customShowDefault" type="checkbox" id="customShowDefault"
                                                class="form-check-input">
                                            <label for="customShowDefault" class="form-check-label">Show default</label>
                                        </div>
                                    </div>
                                    <div class="mt-2 col-md-8 col-12 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8 row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Notifications</h4>
                        <p class="mb-0 fs-5 text-muted">Change notification settings </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-6">
                                <h4 class="mb-1">Notification for email, mobile &amp; Slack</h4>
                            </div>
                            <div class="mb-4">
                                <div role="alert" class="fade alert alert-warning alert-dismissible show">
                                    <button type="button" class="btn-close" aria-label="Close alert"></button>To start
                                    using Slack for personal notifications, you should first connect Slack.
                                </div>
                            </div>
                            <div class="table-responsive mb-3">
                                <table class="text-nowrap table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="w-75">Activity &amp; Conversation</th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-smartphone icon-sm me-2">
                                                    <rect x="5" y="2" width="14" height="20" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="12" y1="18" x2="12.01" y2="18">
                                                    </line>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slack icon-sm me-2">
                                                    <path
                                                        d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z">
                                                    </path>
                                                    <path
                                                        d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z">
                                                    </path>
                                                    <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z">
                                                    </path>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-mail icon-sm me-2">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0"></td>
                                            <td class="border-top-0">
                                                <input name="customCheckOne" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckTwo" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckThree" type="checkbox" class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">When a Files is shared with a team</td>
                                            <td class="border-top-0">
                                                <input name="customCheckFour" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus text-muted icon-sm">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckFive" type="checkbox" class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">When someone requests access to my design</td>
                                            <td class="border-top-0">
                                                <input name="customCheckSix" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckSeven" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckEight" type="checkbox" class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">When someone comments in threads I’m following</td>
                                            <td class="border-top-0">
                                                <input name="customCheckNine" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckTen" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckEleven" type="checkbox" class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">When someone @mentions me in any comments</td>
                                            <td class="border-top-0">
                                                <input name="customCheckTwelve" type="checkbox" class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus text-muted icon-sm">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </td>
                                            <td class="border-top-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus text-muted icon-sm">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive mb-3">
                                <table class="text-nowrap table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="w-75">Project activity</th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-smartphone icon-sm me-2">
                                                    <rect x="5" y="2" width="14" height="20" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="12" y1="18" x2="12.01" y2="18">
                                                    </line>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slack icon-sm me-2">
                                                    <path
                                                        d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z">
                                                    </path>
                                                    <path
                                                        d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z">
                                                    </path>
                                                    <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z">
                                                    </path>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-mail icon-sm me-2">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0">When someone adds me to a project</td>
                                            <td class="border-top-0">
                                                <input name="customCheckThirteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus text-muted icon-sm">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckFourteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="mb-0 text-nowrap table">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="w-75">Team activity</th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-smartphone icon-sm me-2">
                                                    <rect x="5" y="2" width="14" height="20" rx="2"
                                                        ry="2"></rect>
                                                    <line x1="12" y1="18" x2="12.01" y2="18">
                                                    </line>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slack icon-sm me-2">
                                                    <path
                                                        d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z">
                                                    </path>
                                                    <path
                                                        d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z">
                                                    </path>
                                                    <path
                                                        d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z">
                                                    </path>
                                                    <path
                                                        d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z">
                                                    </path>
                                                    <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z">
                                                    </path>
                                                </svg>
                                            </th>
                                            <th>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-mail icon-sm me-2">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0">When my invitees sign up</td>
                                            <td class="border-top-0">
                                                <input name="customCheckSixteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckSeventeen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckEighteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">When someone requests access to my team</td>
                                            <td class="border-top-0">
                                                <input name="customCheckNineteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-top-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus text-muted icon-sm">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </td>
                                            <td class="border-top-0">
                                                <input name="customCheckNineteen" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-bottom-0">When someone invites me to a team</td>
                                            <td class="border-bottom-0">
                                                <input name="customCheckTwentyone" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-bottom-0">
                                                <input name="customCheckTwentytwo" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                            <td class="border-bottom-0">
                                                <input name="customCheckTwentythree" type="checkbox"
                                                    class="form-check-input">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr class="my-6">
                            <div class="row">
                                <div class="mb-3 col-xl-6 col-md-12">
                                    <label class="form-label" for="notification">When should we send you
                                        notifications?</label>
                                    <select name="" class="form-control form-select" id="notification">
                                        <option value="Always" class="text-dark">Always</option>
                                        <option value="One" class="text-dark">One</option>
                                        <option value="Two" class="text-dark">Two</option>
                                        <option value="Three" class="text-dark">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-xl-3 col-md-6">
                                    <label class="form-label" for="dailyDigest">Daily Digest</label>
                                    <select name="" class="form-control form-select" id="dailyDigest">
                                        <option value="Everyday" class="text-dark">Everyday</option>
                                        <option value="One" class="text-dark">One</option>
                                        <option value="Two" class="text-dark">Two</option>
                                        <option value="Three" class="text-dark">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-xl-3 col-md-6">
                                    <label class="form-label" for="time">Time</label>
                                    <select name="" class="form-control form-select" id="time">
                                        <option value="2PM" class="text-dark">2PM</option>
                                        <option value="One" class="text-dark">One</option>
                                        <option value="Two" class="text-dark">Two</option>
                                        <option value="Three" class="text-dark">Three</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-md-12">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="mb-4 mb-lg-0">
                        <h4 class="mb-1">Delete Account</h4>
                        <p class="mb-0 fs-5 text-muted">Easily set up social media accounts</p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <div class="mb-6 card">
                        <div class="card-body">
                            <div class="mb-6">
                                <h4 class="mb-1">Danger Zone </h4>
                            </div>
                            <div>
                                <p>Delete any and all content you have, such as articles, comments, your reading list or
                                    chat messages. Allow your username to become available to anyone.</p>
                                <a class="btn btn-danger" href="/pages/settings#">Delete Account</a>
                                <p class="small mb-0 mt-3">Feel free to contact with any <a
                                        href="/pages/settings#">dashui@example.com</a> questions. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
