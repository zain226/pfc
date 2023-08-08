@extends('admin.layouts.app')
@section('title','Admin Credit Debit Report')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Expenses' =>
        route('admin.expense.index'), 'Report' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Admin Credit Debit</h6>
        <hr>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-5">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-cat"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$revenue ?? ''}}</h3>

                            <p class="text-muted mb-4">Revenue</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="mx-auto widget-icon bg-light-dark text-dark">
                            <i class="fa-solid fa-cat"></i>
                        </div>
                        <div class="text-center mt-3">
                            <h3 class="text-dark mb-1">{{$expense ?? ''}}</h3>

                            <p class="text-muted mb-4">Expense</p>

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
                            <h3 class="text-dark mb-1">{{$profit ?? ''}}</h3>

                            <p class="text-muted mb-4">Profit/Loss</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.expense.index')}}">
                        <button type="submit" class="btn btn-primary">Back to List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->

    </div>
</div>
@endsection
