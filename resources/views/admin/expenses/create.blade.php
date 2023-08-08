@extends('admin.layouts.app')
@section('title','Add Expense')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Expenses' =>
            route('admin.expense.index'), 'Add Expense' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Add Expense</h6>
                </div>
                <div class="card-body">
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
                    <form action="{{route('admin.expense.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <div class="mb-3">
                            <label for="expense" class="form-label">Amount</label>
                            <input class="form-control" type="number" id="expense" name="expense">
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Short Note</label>
                            <input class="form-control" type="text" id="note" name="note">
                        </div>
                        <!-- Bottom Button -->
                        <div class="mb-2"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go
                                        Back
                                    </button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{route('admin.expense.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Bottom Button -->
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function saveAndGoBack() {
            $('#go_back').val(1);
        }
    </script>
@endsection
