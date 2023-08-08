@extends('user.layouts.app')
@section('title','Stud Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('user.stud_certificate'), 'Apply For Stud Certificate' =>
        '']])
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Online Stud Certificate</h6>
                <div class="mb-3"></div>
                <p>By filling out this online stud certificate, I certify that the information contained herein is
                    correct to the best of my knowledge and understanding. Furthermore, I have also informed my local
                    Group Breed Warden of this mating.
                </p>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="select_breed" class="form-label">Select Breed</label>
                    <select class="form-select mb-3" aria-label="" id="select_breed">
                        <option selected="">Select Breeder</option>
                        <option value="1">Golden Retriever</option>
                        <option value="2">Labrador Retriever</option>
                        <option value="3">German Shepherd Cat</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nod" class="form-label">Name of Cat</label>
                            <select class="form-select mb-3" aria-label="" id="nod">
                                <option selected="">Select One</option>
                                <option value="1">Achilles Glory at Supreme Labrador</option>
                                <option value="2">Aqua of Supreme Labradors</option>
                                <option value="3">Audi of Supreme Labrador</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pkc_no" class="form-label">PKC NO</label>
                            <input type="text" class="form-control" id="pkc_no">
                        </div>
                        <div class="mb-3">
                            <label for="date-time" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="ate-time">
                        </div>
                        <div class="mb-3">
                            <label for="traning_level" class="form-label">Traning Level</label>
                            <input type="text" class="form-control" id="traning_level">
                        </div>
                        <div class="mb-3">
                            <label for="pkc_no" class="form-label">PKC NO</label>
                            <input type="text" class="form-control" id="pkc_no">
                        </div>
                        <div class="mb-3">
                            <label for="tattoo" class="form-label">Tattoo</label>
                            <input type="text" class="form-control" id="tattoo">
                        </div>
                        <div class="mb-3">
                            <label for="breed_survey" class="form-label">Breed Survey</label>
                            <input type="text" class="form-control" id="breed_survey">
                        </div>
                        <div class="mb-3">
                            <label for="mating_date" class="form-label">Mating Date</label>
                            <input type="date" class="form-control" id="mating_date">
                        </div>
                        <div class="mb-3">
                            <label for="owner_name" class="form-label">Name of Owner(s) of Stud</label>
                            <input type="text" class="form-control" id="owner_name">
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" class="form-control" id="street">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nob" class="form-label">Name of Bitch</label>
                            <select class="form-select mb-3" aria-label="" id="nob">
                                <option selected="">Select One</option>
                                <option value="1">Achilles Glory at Supreme Labrador</option>
                                <option value="2">Aqua of Supreme Labradors</option>
                                <option value="3">Audi of Supreme Labrador</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pkc_no" class="form-label">PKC NO</label>
                            <input type="text" class="form-control" id="pkc_no">
                        </div>
                        <div class="mb-3">
                            <label for="date-time" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="ate-time">
                        </div>
                        <div class="mb-3">
                            <label for="traning_level" class="form-label">Traning Level</label>
                            <input type="text" class="form-control" id="traning_level">
                        </div>
                        <div class="mb-3">
                            <label for="pkc_no" class="form-label">PKC NO</label>
                            <input type="text" class="form-control" id="pkc_no">
                        </div>
                        <div class="mb-3">
                            <label for="tattoo" class="form-label">Tattoo</label>
                            <input type="text" class="form-control" id="tattoo">
                        </div>
                        <div class="mb-3">
                            <label for="breed_survey" class="form-label">Breed Survey</label>
                            <input type="text" class="form-control" id="breed_survey">
                        </div>
                        <div class="mb-3">
                            <label for="mating_date" class="form-label">Mating Date</label>
                            <input type="date" class="form-control" id="mating_date">
                        </div>
                        <div class="mb-3">
                            <label for="owner_name" class="form-label">Name of Owner(s) of Stud</label>
                            <input type="text" class="form-control" id="owner_name">
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" class="form-control" id="street">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="mb-3"></div>
                <h6 class="mb-0">Stud Certificate</h6>
                <div class="mb-3"></div>
                <p>Once you click Submit, this certificate will be recorded. An online copy of this certificate will
                    also be available to the owner of the bitch. If you already have a positive balance in your account,
                    that balance will be used for payment. If payment is required, you will be alerted of the amount
                    payable. All payments are only acceptable in the form of a Bank Draft or Pay Order, drawn on a local
                    bank an d made out in favour of “PKC“. No payments made via any other method are acceptable.</p>
            </div>
            <div class="mb-3"></div>
            <div class="card-header">
                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                    <div class="card radius-10 bg-transparent shadow-none w-100">
                        <div class="card-body p-0">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                    </div>
                                    <h4 class="my-3">Stud Certificate Fee</h4>
                                    <h2>Rs 100</h2>
                                    <p class="mb-0 mt-2">Certificate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

        @endsection
