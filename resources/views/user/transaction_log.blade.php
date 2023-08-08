@extends('user.layouts.app')
@section('title','User Transaction Log Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Transaction Log' =>
        route('user.transaction_log.index'), 'Details' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0 text-center">TRANSACTION HISTORY</h6>
                </div>
                <div class="mb-4"></div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date Time</th>
                                <th>Service Type</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                                <th>Closing Balance</th>
                            </tr>

                        </thead>
                        <tbody>

                            <tr>
                                <td>2022-10-25 07:18:40</td>
                                <td>Stud Certificate</td>
                                <td>1000</td>
                                <td>100 </td>
                                <td>900</td>
                            </tr>
                            <tr>
                                <td>2022-10-25 07:18:40</td>
                                <td>Stud Certificate</td>
                                <td>1000</td>
                                <td>100 </td>
                                <td>900</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date Time</th>
                                <th>Transaction</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                                <th>Closing Balance</th>
                            </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
