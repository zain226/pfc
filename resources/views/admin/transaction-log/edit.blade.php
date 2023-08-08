@extends('admin.layouts.app')
@section('title','Edit Transaction Log')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Transaction Log' =>
            route('admin.transaction_log.index'), 'Edit Transaction Log' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Edit Transaction Log</h6>
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
                                    <div class="text-white">{{Session::get('message')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{route('admin.transaction_log.update',$id)}}" method="post">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <input type="hidden" name="user_id" value="{{$user_id}}" id="user_id">
                        <div class="mb-3">
                            <label for="breeder_id" class="form-label">Breeder ID</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="breeder_id"
                                    name="breeder_id">
                                <option selected="" value="">Select Breeder ID</option>
                                @foreach($breeders as $breeder)
                                    <option value="{{$breeder->id ?? ''}}" {{($transaction->breeder_id == $breeder->id) ? 'selected' : ''}}>{{$breeder->name}}
                                        - {{$breeder->kennel ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="breeder_id" class="form-label">Service Type</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="service_id"
                                    name="service_id">
                                <option selected="" value="">Select Service Type</option>
                                @foreach($services as $service)
                                    <option value="{{$service->id ?? ''}}" data-fee="{{$service->charges ?? ''}}" {{($transaction->service_id == $service->id) ? 'selected' : ''}}>{{$service->service}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <input type="text" class="form-control" id="note" name="note"
                                   value="{{$transaction->note ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="credit" class="form-label">Deposit (Credit)</label>
                            <input class="form-control" type="text" id="credit" name="credit" value="{{$transaction->credit ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="withdrawal" class="form-label">Withdrawal (Debit)</label>
                            <input class="form-control" type="text" id="withdrawal" name="debit" value="{{$transaction->debit ?? ''}}" >
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label">Closing Balance</label>
                            <input type="text" class="form-control" id="closing_balance" name="closing_balance"
                                   value="{{$transaction->closing_balance ?? ''}}">
                        </div>
                        <!-- Bottom Button -->
                        <div class="mb-2"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Update & Go Back</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" onclick="history.back()" class="btn btn-danger">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Bottom Button -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#service_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Service',
                allowClear: true
            });

            $('#service_id').change(function () {
                var service_id = $('#service_id').find(":selected").val();
                var charges = $(this).find(':selected').data('fee');
                $('#withdrawal').val(charges);

            });
        });
        function saveAndGoBack()
        {
            $('#go_back').val(1);
        }
    </script>
@endsection
