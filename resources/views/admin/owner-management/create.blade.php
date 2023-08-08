@extends('admin.layouts.app')
@section('title','Add New Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Owner Management' =>
        route('admin.owner_management.index'), 'Add Owner' =>
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
                <h6 class="mb-0">Add New Property</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.owner_management.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="owner_name" class="form-label">Owner Name</label>
                        <input class="form-control" type="text" id="owner_name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="owner_contact" class="form-label">Owner Contact </label>
                        <input class="form-control" type="text" id="owner_contact" name="contact">
                    </div>
                    <div class="mb-3">
                        <label for="owner_address" class="form-label">Owner Address</label>
                        <input class="form-control" type="text" id="owner_address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="owner_email" class="form-label">Owner Email</label>
                        <input class="form-control" type="text" id="owner_email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="owner_kennel" class="form-label">Owner Kennel</label>
                        <input class="form-control" type="text" id="owner_kennel" name="kennel">
                    </div>


                    <div class="mb-3">
                        <label for="owner_registration" class="form-label">Owner Registration </label>
                        <input class="form-control" type="text" id="owner_registration" name="registration">
                    </div>

                    <!-- Bottom Button -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <a href="{{route('admin.owner_management.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Bottom Button -->


            </div>
        </div>
        @endsection
