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
                        <table id="transactions" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Date Time</th>
                                <th>Service Type</th>
                                <th>Note</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                                <th>Closing Balance</th>
                                <th>Actions</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($transaction_logs as $transaction)
                                <tr>
                                    <td>{{$transaction->created_at->format('Y-m-d  h:i:s A') ?? '-'}}</td>
                                    <td>{{$transaction->service->service ?? '-'}}</td>
                                    <td>{{$transaction->note ?? '-'}}</td>
                                    <td>{{$transaction->credit ?? '-'}}</td>
                                    <td>{{$transaction->debit ?? '-'}}</td>
                                    <td>{{$transaction->closing_balance ?? '-'}}</td>

                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{route('user.transaction_log.show',$transaction->id)}}" class="text-primary"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                               data-bs-original-title="Views" aria-label="Views"><i
                                                    class="bi bi-eye-fill"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Date Time</th>
                                <th>Service Type</th>
                                <th>Note</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                                <th>Closing Balance</th>
                                <th>Actions</th>
                            </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#transactions').DataTable({
            "ordering": false
        });
    </script>
@endsection
