@extends('user.layouts.app')
@section('title','Add Transfer Lease')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
            route('user.transfer_lease.index'), 'Add Transfer Lease' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Add Transfer Lease</h6>
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
                    <form action="{{route('user.transfer_lease.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="cat_id" class="form-label">Select Cat</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="cat_id" name="cat_id">
                                <option selected="">Select Cat</option>
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id ?? ''}}">{{$cat->pet_name ?? ''}} - {{$cat->registration ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_owner_id" class="form-label">New Owner ID</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="new_owner_id" name="new_owner_id">
                                <option selected="">Select Owner ID</option>
                                @foreach($new_owners as $owner)
                                    <option value="{{$owner->id}}">{{$owner->name ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bottom Button -->
                        <div class="mb-2"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
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
