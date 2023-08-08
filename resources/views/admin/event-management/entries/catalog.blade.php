<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{asset('admin_assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('admin_assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet"/>


    <!-- CSS Files -->
    <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('fontawesome-free-6.1.2-web/css/all.css')}}" rel="stylesheet"> <!-- Font Awesome 6  -->
    <link href="{{asset('fontawesome-free-6.1.2-web/css/fontawesome.min.css')}}" rel="stylesheet">
    <!-- Font Awesome 6  -->
    <link href="{{asset('admin_assets/css/ck-content-style.css')}}" rel="stylesheet">
    <!--Theme Styles-->
    <link href="{{asset('admin_assets/css/dark-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/css/semi-dark.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/css/header-colors.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin_assets/css/custom.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/parent_custom.css')}}" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>

    <title>Pakistan Feline Club</title>
    <style>
        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 2cm;
            margin-left: 0cm;
            margin-right: 0cm;
            margin-bottom: 2cm;
            background-color: transparent;
            color: black;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            /** Extra personal styles **/
            /*background-color: #eaeaea;*/
            color: black;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            /*background-color: #eaeaea;*/
            color: black;
            text-align: center;
            line-height: 1.5cm;
        }

        footer .pagenum:before {
            content: counter(page);
        }

        .rotate {

            transform: rotate(-90deg);


            /* Legacy vendor prefixes that you probably don't need... */

            /* Safari */
            -webkit-transform: rotate(-90deg);

            /* Firefox */
            -moz-transform: rotate(-90deg);

            /* IE */
            -ms-transform: rotate(-90deg);

            /* Opera */
            -o-transform: rotate(-90deg);

            /* Internet Explorer */
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
<header>
    <div style="display: flex">
        <img src="{{asset('frontend/images/cat_logo.png')}}" width="auto" height="80px" style="position: absolute;
top: 0px;
left: 0px;">
        <p style="position: absolute;
        margin-top: 20px;
right: 100px;
top: 0px;
width: 290px;
line-height: 20px;
" >{{$event->title}} {{$event->city}}</p>
        <img src="{{asset('frontend/images/iku-logo.jpg')}}" width="auto" height="80px" style="position: absolute;
top: 0px;
right: 0px;">
    </div>
</header>

<!--start wrapper-->
<div class="wrapper">
    <div class="row">
        <div class="col-md-10 mt-5 text-center" style="margin-top: 30vh">
            <h2 style="font-family: 'Acme';font-size: 18px;letter-spacing: 2px;"><b>{{$event->title}}
                    <br> {{$event->city}}</b></h2><br>
            <h3 style="margin-bottom: 20px;font-size: 16px;"><b>JUDGES</b></h3>
            @foreach(json_decode($event->judges,true) as $judge)
                @if( empty($judge))
                    @continue
                @endif
                <p style="font-family: 'Andada Pro';font-size: 14px;line-height: 5px;font-weight: bold;">{{$judge}}</p>
            @endforeach
            <h3 style="margin-bottom: 20px;font-size: 16px;"><b>STEWARDS</b></h3>
            @foreach(json_decode($event->steward,true) as $steward)
                @if( empty($steward))
                    @continue
                @endif
                <p style="font-family: 'Andada Pro';font-size: 14px;line-height: 5px;font-weight: bold;">{{$steward}}</p>
            @endforeach
            <h3 style="margin-bottom: 20px;font-size: 16px;"><b>VENUE</b></h3>
            <p style="font-family: 'Andada Pro';font-size: 14px;line-height: 15px;font-weight: bold;">{{$event->venue}}</p>
        </div>
        <div class="col-md-2 text-center uppercase"
             style="margin-top: 50px;letter-spacing: 2px;font-family: 'Andada Pro';font-weight: bold;"><h3>
                <b>Date: {{date('F jS, Y',strtotime($event->event_date))}}</b></h3></div>
    </div>
    <div class="page-break"></div>
    <div class="row">
        <div class="text-center uppercase"
             style="margin-top: 50px;letter-spacing: 2px;font-family: 'Andada Pro';font-weight: bold;"><h3>
                <b>RULES GOVERNING PKC ALL BREED SHOW</b></h3></div>
        <div class="mt-5">
            <p>At all shows the division into groups is done in accordance with the current PKC Breed Nomenclature.</p>
            <p>These groups are as follows</p>
            <ul>
                <li><b>Group 1</b> Sheepcats and Cattle Cats, except Swiss Cattle Cats</li>
                <li><b>Group 2</b> Pinschers and Schnauzers - Molossoid Breeds-Swiss Mountain and Cattle Cats and Other Breeds</li>
                <li><b>Group 3</b> Terriers</li>
                <li><b>Group 4</b> Dachshunds</li>
                <li><b>Group 5</b> Spitz and Primitive Types</li>
                <li><b>Group 6</b> Scenthounds and Related Breeds</li>
                <li><b>Group 7</b> Pointing Cats</li>
                <li><b>Group 8</b> Retrievers - Flushing Cats - Water Cats</li>
                <li><b>Group 9</b> Companion and Toy Cats</li>
                <li><b>Group 10</b> Sight Hounds</li>
            </ul>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="row">
        <div class="text-center uppercase"
             style="margin-top: 50px;letter-spacing: 2px;font-family: 'Andada Pro';font-weight: bold;"><h3>
                <b>DEFINITION OF CLASSES</b></h3></div>
        <div class="mt-5">
            <p>The show committee reserves the right no to accept the participation of any exhibitor at the show.</p>
            <ul style="font-size: 16px;margin-top: 40px">
                <li>Baby Class <span style="margin-left:100px">(3 to 6 months)</span></li>
                <li>Puppy Class <span style="margin-left:91px">(6 to 9 months)</span></li>
                <li>Junior Class <span style="margin-left:90px">(9 to 18 months)</span></li>
                <li>Intermediate Class <span style="margin-left:42px">(15 to 24 months)</span></li>
                <li>Open Class <span style="margin-left:99px">(15 months and over)</span></li>
                <li>Working Class <span style="margin-left:77px">(15 months and over)</span></li>
                <li>Champion Class <span style="margin-left:62px">(15 months and over)</span></li>
                <li>Veteran Class <span style="margin-left:81px">(8 years and over)</span></li>
            </ul>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="row">
        @php
            $groupName = '';
            $className = '';
            $breedName = '';
            $hairType = '0';
        @endphp
        @foreach($entries as $entry)
            @if($groupName !== $entry->breed->group->name)
        <h2 class="text-center font-weight-900">

                @php
                    $groupName = $entry->breed->group->name;
                @endphp
            {{$entry->breed->group->name ?? ''}}
        </h2>
            @endif
            @if($breedName !== $entry->breed->breed_value)
        <div class="text-center uppercase"
             style="margin: 10px 0px;letter-spacing: 2px;font-family: 'Andada Pro';font-weight: bolder;"><h3>
                <b>
                        @php
                            $breedName = $entry->breed->breed_value;
                            $className = '';
                        @endphp
                        {{$entry->breed->breed_value ?? ''}}
                </b></h3>
        </div>
            @endif
        <div class="row">
            <div class="col-12">
                @if($className !== $entry->class)
                <p class="text-center" style="margin: 10px 0px;">
                    <strong>
                        @php
                            $className = $entry->class;
                            $hairType = '0';
                        @endphp
                        {{$entry->class ?? ''}}
                    </strong></p><br>
                @endif
                    @if($entry->hair !== null && $hairType !== $entry->hair)
                        <div class="text-center uppercase"
                             style="margin: 0px 0px;letter-spacing: 2px;font-family: 'Andada Pro';font-weight: bolder;"><h4>
                                <b>
                                    @php
                                        $hairType = $entry->hair;
                                    @endphp
                                    {{$entry->hair ?? ''}}
                                </b></h4>
                        </div>
                    @endif
                <span><strong>{{$entry->show_id}})</strong><strong style="margin-left: 20px">{{$entry->pet_name}}, {{$entry->registration_no}}</strong></span><br>
                <span style="margin-left: 40px">DOB: {{date('d-M-Y',strtotime($entry->dob))}}</span><br>
                    @if($entry->hair !== null)
                    <span style="margin-left: 40px">Hair: {{$entry->hair ?? ''}}</span><br>
                    @endif
                <span style="margin-left: 40px">S: {{$entry->sire ?? 'N/A'}}</span><br>
                <span style="margin-left: 40px">D: {{$entry->dam ?? 'N/A'}}</span><br>
                <p style="margin-left: 40px">B: {{$entry->breeder->name ?? 'N/A'}} O: {{$entry->owner_name ?? 'N/A'}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--end wrapper-->
<footer>
    <div class="pagenum" style="position: absolute;bottom: 0;right: 0"></div>
</footer>


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
        }).then(function (value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

</body>


</html>
