@extends('admin.layouts.app')
@section('title','Edit Membership Application')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Membership Applications' =>
        route('admin.membership_application.index'), 'Edit Membership Application' => 'javascript:void(0);']])

        <div class="card">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{ $error }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            @if(Session::has('message'))
                <div class="alert alert-dismissible fade show py-2 bg-success">
                    <div class="d-flex align-items-center">
                        <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
                        </div>
                        <div class="ms-3">
                            <div class="text-white">{{Session::get('message')}}</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header">
                <h6 class="mb-0">Edit Application</h6>
            </div>
            <form action="{{route('admin.membership_application.update',$id)}}" method="post">
                @csrf
                <input type="hidden" name="go_back" value="0" id="go_back">
                <input type="hidden" name="pic" value="{{$member->picture ?? ''}}">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{$member->full_name ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="event_note" class="form-label">CNIC</label>
                        <input class="form-control" type="text" id="event_note" disabled value="{{$member->cnic ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input class="form-control" type="text" id="contact" name="contact" value="{{$member->phone ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input class="form-control" type="text" id="address" name="address" value="{{$member->address ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input class="form-control" type="text" id="city" name="city" value="{{$member->city ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{$member->email ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="text" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="kennel" class="form-label">Kennel</label>
                        <input class="form-control" type="text" id="kennel" name="kennel" value="{{old('kennel')}}">
                    </div>
                    <div class="mb-3">
                        <label for="registration_no" class="form-label">Registration No</label>
                        <input class="form-control" type="text" id="registration_no" name="registration_no" value="{{$new_reg_no ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Membership Type</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="permanent_member" id="temporary_membership" value="0" checked>
                        <label class="form-check-label" for="temporary_membership">Temporary</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="permanent_member" id="permanent_membership" value="1">
                        <label class="form-check-label" for="permanent_membership">Permanent</label>
                    </div>
                </div>
                <!-- Bottom Button -->

                <div class="row">
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Member</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Create Member and Go Back</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="button" onclick="history.back();" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
                <!-- End Bottom Button -->
            </form>

        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function saveAndGoBack()
        {
            $('#go_back').val(1);
        }
    </script>
@endsection
