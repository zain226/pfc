@extends('user.layouts.app')
@section('title','Transfer Funds')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Transaction Log' =>
            route('user.transaction_log.index'), 'Transfer Funds' =>
            'javascript:void(0)']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Transfer Funds</h6>
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
                    <form action="{{route('user.transaction_log.funds_transfer_post')}}" method="post">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <input type="hidden" name="user_id" value="{{$user_id}}" id="user_id">
                        <div class="mb-3">
                            <label for="breeder_id" class="form-label">Breeder ID</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="breeder_id"
                                    name="breeder_id">
                                <option selected="" value="">Select Breeder ID</option>
                                @foreach($breeders as $breeder)
                                    <option value="{{$breeder->id ?? ''}}">{{$breeder->name}}
                                        - {{$breeder->kennel ?? ''}} - {{$breeder->registration_no ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="withdrawal" class="form-label">Amount</label>
                            <input class="form-control" type="text" id="withdrawal" name="debit">
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
                                    <a href="{{route('user.transaction_log.index')}}" class="btn btn-danger">Cancel</a>
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
        function saveAndGoBack() {
            $('#go_back').val(1);
        }
    </script>
@endsection
