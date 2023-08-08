@extends('admin.layouts.app')
@section('title','Add New Property')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Owner Management' =>
            route('admin.owner_management.index'), 'Add Owner' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Add New Property</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="owner_name" class="form-label">Owner Name</label>
                        <input class="form-control" type="text" id="owner_name">
                    </div>
                    <div class="mb-3">
                        <label for="owner_contact" class="form-label">Owner Contact </label>
                        <input class="form-control" type="text" id="owner_contact">
                    </div>
                    <div class="mb-3">
                        <label for="owner_address" class="form-label">Owner Address</label>
                        <input class="form-control" type="text" id="owner_address">
                    </div>

                    <div class="mb-3">
                        <label for="owner_kennel" class="form-label">Owner Kennel</label>
                        <input class="form-control" type="text" id="owner_kennel">
                    </div>


                    <div class="mb-3">
                        <label for="owner_registration" class="form-label">Owner Registration </label>
                        <input class="form-control" type="text" id="owner_registration">
                    </div>

                    <!-- Bottom Button -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid">

                                <button type="submit" class="btn btn-primary">Save and Go Back to List</button>

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Bottom Button -->


                </div>
            </div>
        </div>
    </div>
@endsection
