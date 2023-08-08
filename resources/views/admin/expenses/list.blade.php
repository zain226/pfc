@extends('admin.layouts.app')
@section('title','Expenses Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Expenses' =>
            route('admin.expense.index'), 'List' =>
            'javascript:void(0);']])
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
            <hr /> -->
            <div class="card">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-dismissible fade show py-2 bg-danger">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white">
                                    <ion-icon name="close-circle-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white">{{ $error }}</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                @if(Session::has('warning'))
                    <div class="alert alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-warning">
                                <ion-icon name="warning-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-warning">{{Session::get('warning')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-dismissible fade show py-2 bg-success">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="checkmark-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('message')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('error')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-body">
                    <form method="post" action="{{route('admin.expense.report')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <label> Start Date:*</label>
                                <input type="date" name="start_date" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label> End Date:*</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                            <div class="col-sm-4"><button type="submit" class="btn btn-primary btn-block mt-4"> Get Report </button></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if(Session::has('warning'))
                        <div class="alert alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-warning">
                                    <ion-icon name="warning-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-warning">{{Session::get('warning')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-dismissible fade show py-2 bg-success">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white">
                                    <ion-icon name="checkmark-circle-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white">{{Session::get('message')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-dismissible fade show py-2 bg-danger">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white">
                                    <ion-icon name="close-circle-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white">{{Session::get('error')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Transaction Log</h6>
                        <a href="{{route('admin.expense.create')}}"
                           class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                            <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                            </ion-icon>
                            Add Expense
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="expenses" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Note</th>
                                <th>Amount (PKR)</th>
                                <th>Date time</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{$expense->id ?? '-'}}</td>
                                    <td>{{$expense->note ?? '-'}}</td>
                                    <td>{{$expense->expense ?? '-'}}</td>
                                    <td>{{$expense->created_at->format('Y-m-d  h:i:s A') ?? '-'}}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{route('admin.expense.delete',$expense->id)}}"
                                               class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                               data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                               aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Note</th>
                                <th>Amount (PKR)</th>
                                <th>Date time</th>
                                <th>Action</th>
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
        $('#expenses').DataTable({
            "ordering": false
        });
    </script>
@endsection
