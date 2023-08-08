<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{asset('admin_assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('admin_assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />


    <!-- CSS Files -->
    <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('fontawesome-free-6.1.2-web/css/all.css')}}" rel="stylesheet"> <!-- Font Awesome 6  -->
    <link href="{{asset('fontawesome-free-6.1.2-web/css/fontawesome.min.css')}}" rel="stylesheet"> <!-- Font Awesome 6  -->
    <link href="{{asset('admin_assets/css/ck-content-style.css')}}" rel="stylesheet">
    <!--Theme Styles-->
    <link href="{{asset('admin_assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/header-colors.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('css/parent_custom.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/toastr/toastr.min.css')}}">
    @yield('styles')

    <title>@yield('title') - Pakistan Feline Club</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    @include('user.components.sidebar')
    @include('user.components.top_header')

    @yield('content')

    @include('user.components.footer')
    @include('user.components.back_to_top')
    @include('user.components.switcher')
    @include('user.components.overlay_nav_toggle')
</div>
<!--end wrapper-->

<!-- JS Files-->
<script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
{{--<script src="{{asset('ckeditor5/ckeditor.js')}}"></script>--}}
<!--plugins-->
<script src="{{asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin_assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('admin_assets/js/index.js')}}"></script>
<script src="{{asset('admin_assets/js/table-datatable.js')}}"></script>
<script src="{{asset('admin_assets//plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin_assets/js/form-select2.js')}}"></script>


<!-- Main JS-->
<script src="{{asset('admin_assets/js/main.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('frontend/plugins/toastr/toastr.min.js')}}"></script>
<script>
    $(".delete-confirm").on("click", function (event) {
        console.log('event is triggered');
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanently deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

</script>
@if(Session::has('message'))
    <script>
        toastr.success('Success','{{Session::get('message')}}', {
            tapToDismiss: true,
            hideMethod: 'fadeOut',
            progressBar: true
        })
    </script>
@endif
@if(Session::has('error'))
    <script>
        toastr.error('Error','{{Session::get('error')}}', {
            tapToDismiss: true,
            hideMethod: 'fadeOut',
            progressBar: true
        })
    </script>
@endif
@if(Session::has('status'))
    <script>
        toastr.success('Success','{{Session::get('status')}}', {
            tapToDismiss: true,
            hideMethod: 'fadeOut',
            progressBar: true
        })
    </script>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('Error','{{$error}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endforeach
@endif
@yield('scripts')

</body>


</html>
