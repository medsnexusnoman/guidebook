<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.admin.head')
    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
            @include('layouts.partials.admin.navbar-vertical-admin')
        <!-- Page content -->
        <div id="page-content">
            @include('layouts.partials.admin.header')
            @include('layouts.partials.admin.notifications')
            <!-- Container fluid -->
            @yield('content')
        </div>
    </div>



    <!-- Scripts -->
    @include('layouts.partials.admin.scripts')

    @yield('scripts')

</body>

</html>
