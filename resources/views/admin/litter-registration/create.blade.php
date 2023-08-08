@extends('admin.layouts.app')
@section('title','Add Litter Registration Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
        route('admin.litter_registration.index'), 'Add Litter Registration Detail' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add Litter Registration Detail</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="Stud_id" class="form-label">Stud ID</label>
                    <input class="form-control" type="input" id="Stud_id">
                </div>
                <div class="mb-3">
                    <label for="kennel_name" class="form-label">Kennel Name</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="kennel_name">
                        <option selected="">Select Kennel Name</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="litter_dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="litter_dob">
                </div>
                <div class="mb-3">
                    <label for="litter_detail" class="form-label">Litter Detail</label>
                    <input class="form-control" type="input" id="litter_detail">
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
        @endsection
