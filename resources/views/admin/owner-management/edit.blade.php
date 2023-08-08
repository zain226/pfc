@extends('admin.layouts.app')
@section('title','Edit Owner')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Owner Management' =>
        route('admin.owner_management.index'), 'Edit Owner' =>
        '']])

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
                <h6 class="mb-0">Edit Owner</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.owner_management.update',$id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="owner_name" class="form-label">Owner Name</label>
                        <input class="form-control" type="text" id="owner_name" name="name" value="{{$owner->name ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="owner_contact" class="form-label">Owner Contact </label>
                        <input class="form-control" type="text" id="owner_contact" name="contact" value="{{$owner->contact ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="owner_address" class="form-label">Owner Address</label>
                        <input class="form-control" type="text" id="owner_address" name="address" value="{{$owner->address ?? ''}}">
                    </div>

                    <div class="mb-3">
                        <label for="owner_email" class="form-label">Owner Email</label>
                        <input class="form-control" type="text" id="owner_email" name="email" value="{{$owner->email ?? ''}}">
                    </div>

                    <div class="mb-3">
                        <label for="owner_kennel" class="form-label">Owner Kennel</label>
                        <input class="form-control" type="text" id="owner_kennel" name="kennel" value="{{$owner->kennel ?? ''}}">
                    </div>


                    <div class="mb-3">
                        <label for="owner_registration" class="form-label">Owner Registration </label>
                        <input class="form-control" type="text" id="owner_registration" name="registration" value="{{$owner->registration ?? ''}}">
                    </div>

                    <!-- Bottom Button -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <a href="{{route('admin.owner_management.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endsection
