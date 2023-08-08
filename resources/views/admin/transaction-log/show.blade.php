@extends('admin.layouts.app')
@section('title','Transaction Log Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Transaction Log Detail' =>
        route('admin.transaction_log.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Transaction Log Detail</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Breeder ID</th>
                        <td>{{$transaction->breeder->name ?? ''}} ({{$transaction->breeder->registration_no ?? ''}})</td>
                    </tr>
                    <tr>
                        <th scope="col">Service Type</th>
                        <td>{{$transaction->service->service ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Deposit</th>
                        <td>{{$transaction->credit ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Withdrawal</th>
                        <td>{{$transaction->debit ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Expense</th>
                        <td>{{$transaction->expense ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date time</th>
                        <td>{{$transaction->created_at->format('Y-m-d  h:i:s A') ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Transaction By</th>
                        <td>{{$transaction->user->role ?? ''}}</td>
                    </tr>

                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.transaction_log.index')}}">
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
