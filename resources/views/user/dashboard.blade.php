@extends('user.layouts.app')
@section('title','User Dashboard')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Dashboard' =>
        route('user.dashboard'), '' =>
        '']])
        @if($available_balance < 0)
            <div>
                <a href="javascript:void(0);" style="-webkit-border-radius: 100px;font-size: 25px;
font-weight: bold;" class="btn btn-danger px-4 radius-xl font-weight-900 font-size-20"><span class="badge badge-pill badge-warning uppercase p-2 bg-white text-danger" style="-webkit-border-radius: 100px;">Warning!</span> This account is delinquent! Please contact the PKC office.</a>
            </div>
            <br>
        @endif
        <!--end breadcrumb-->
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-5">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-cat"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$total_registered_cats_own ?? ''}}</h3>
                            <p class="text-muted mb-4">Total Cats Own </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-shield-cat"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$total_registered_cats_breeder ?? ''}}</h3>

                            <p class="text-muted mb-4">Total Cats Breed</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$closing_balance ?? '0'}}</h3>

                            <p class="text-muted mb-4">Current Balance</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-wave-square"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$last_deposit ?? '0'}}</h3>

                            <p class="text-muted mb-4">Last Deposit</p>

                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col">--}}
{{--                <div class="card radius-10">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="mx-auto widget-icon bg-light-dark text-dark">--}}
{{--                            <i class="fa-solid fa-user-check"></i>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mt-3">--}}
{{--                            <h3 class="text-dark mb-1">{{$total_owners ?? '1289'}}</h3>--}}
{{--                            <p class="text-muted mb-4">Total Show Entries</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--end row-->
        <!-- Garaphs -->
        <!-- Start row -->
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Transcation Log</h6>
                            <div class="ms-auto">
                                <div class="d-flex align-items-center font-13 gap-2">
                                    <span class="border px-1 rounded cursor-pointer"><i
                                            class="bx bxs-circle me-1 text-dark"></i>Credit</span>
                                    <span class="border px-1 rounded cursor-pointer"><i
                                            class="bx bxs-circle me-1 text-dark opacity-25"></i>Debit</span>
                                </div>
                            </div>
                        </div>
                        <div class="chart-container1">
                            <canvas id="chart_transactions"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 d-flex">
                <div class="card radius-10 overflow-hidden w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Top Breeds</h6>
                        </div>
                        <div class="chart-container6">
                            <div class="piechart-legend">
                                <h2 class="mb-1">{{$total_cat_count ?? ''}}</h2>
                                <h6 class="mb-0">Total Count</h6>
                            </div>
                            <canvas id="top_breeds"></canvas>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($top_breeds as $cat)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                            {{$cat->breed->breed_value ?? ''}}
                            <span class="badge bg-dark {{($loop->index == 1)? 'opacity-75' : '' }} {{($loop->index == 2)? 'opacity-25' : '' }} rounded-pill">{{$cat->cat_count}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content-->

    <!-- End Garaphs -->
</div>
<!-- End page content-->

<!--end page content wrapper-->
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            var months = {!! $month_names !!};
            var credits = {!!$credits_last_six_month!!};
            var debits = {!!$debits_last_six_month!!};
            var ctx = document.getElementById('chart_transactions').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Credits',
                        data: credits,
                        backgroundColor: [
                            '#212529'
                        ],
                        /* fill: {
                            target: 'origin',
                            above: 'rgb(146 62 185 / 21%)',   // Area will be red above the origin
                            below: 'rgb(146 62 185 / 21%)'    // And blue below the origin
                          }, */
                        tension: 0.4,
                        borderColor: [
                            '#212529'
                        ],
                        borderWidth: 0,
                        borderRadius: 20
                    },
                        {
                            label: 'Debits',
                            data: debits,
                            backgroundColor: [
                                'rgb(33 37 41 / 20%)'
                            ],
                            fill: {
                                target: 'origin',
                                above: 'rgb(33 37 41 / 20%)',   // Area will be red above the origin
                                below: 'rgb(33 37 41 / 20%)'    // And blue below the origin
                            },
                            tension: 0.4,
                            borderColor: [
                                'rgb(33 37 41 / 20%)'
                            ],
                            borderWidth: 0,
                            borderRadius: 20
                        }]
                },
                options: {
                    maintainAspectRatio: false,
                    barPercentage: 0.7,
                    categoryPercentage: 0.35,
                    plugins: {
                        legend: {
                            maxWidth: 20,
                            boxHeight: 20,
                            position:'bottom',
                            display: true,
                        }
                    },
                    scales: {
                        x: {
                            stacked: false,
                            beginAtZero: true
                        },
                        y: {
                            stacked: false,
                            beginAtZero: true
                        }
                    }
                }
            });


            var breedNames = {!! $breedNames !!};
            var breedCount = {!! $breedCount !!};
            var ctx = document.getElementById('top_breeds').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: breedNames,
                    datasets: [{
                        data: breedCount,
                        backgroundColor: [
                            "rgb(33 37 41 / 100%)",
                            "rgb(33 37 41 / 50%)",
                            "rgb(33 37 41 / 25%)",
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    cutout: 105,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    }

                }
            });

        })
    </script>
@endsection
