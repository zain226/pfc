@extends('admin.layouts.app')
@section('title','Edit Stud Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('admin.stud_certificate.index'), 'Edit Stud Detail' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Edit Stud Detail</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="breeder-kennel-name" class="form-label">Breeder's &amp; Kennel Name</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="breeder-kennel-name">
                        <option selected="">Select Breeder</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="stud-breed" class="form-label">Breed</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="stud-breed"> 
                        <option selected="">Select Breed</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sire-pkc-no" class="form-label">Name Of Sire - PKC No</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="sire-pkc-no">
                        <option selected="">Select Name Of Sire - PKC No</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="dam-pkc-no" class="form-label">Name Of Dam - PKC No</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="dam-pkc-no">
                        <option selected="">Name Of Dam - PKC No</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="dam-owner-id" class="form-label">Dam Owner ID</label>
                    <select class="form-select mb-3 single-select" aria-label="" id="dam-owner-id">
                        <option selected="">Select Breeder</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mating-date" class="form-label">Mating Date</label>
                    <input type="date" class="form-control" id="mating-date">
                </div>
                <div class="mb-3">
                    <label for="date-time" class="form-label">Date Time</label>
                    <input type="date" class="form-control" id="ate-time">
                </div>


                <!-- Bottom Button -->
                <div class="mb-3"></div>
                <div class="row">
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
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
