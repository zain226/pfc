@extends('user.layouts.app')
@section('title','Edit Transfer Lease')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
        route('user.transfer_lease.index'), 'Edit Transfer Lease' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Edit Transfer Lease</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="breeder_id" class="form-label">Breeder ID</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="breeder_id">
                        <option selected="">Select Breeder ID</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="old_owner_id" class="form-label">Old Owner ID</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="old_owner_id">
                        <option selected="">Select Old Owner ID</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="action" class="form-label">Action</label>
                    <input class="form-control" type="input" id="action">
                </div>
                <div class="mb-3">
                    <label for="pkc_god_no" class="form-label">Name of Cat - PKC No</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="pkc_god_no">
                        <option selected="">Select Name of Cat - PKC No</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="new_owner_id" class="form-label">New Owner ID</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="new_owner_id">
                        <option selected="">Select Name of Cat - PKC No</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="date_from" class="form-label">Date From</label>
                    <input type="date" class="form-control" id="date_from">
                </div>
                <div class="mb-3">
                    <label for="date_to" class="form-label">Date To</label>
                    <input type="date" class="form-control" id="date_to">
                </div>
                <div class="mb-3">
                    <label for="submit_date" class="form-label">Submit Date</label>
                    <input type="date" class="form-control" id="submit_date">
                </div>

                <!-- Bottom Button -->
                <div class="mb-2"></div>
                <div class="row">
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">

                                <button type="submit" link="" class="btn btn-primary">Save Changes and Go Back to List</button>


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
