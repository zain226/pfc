@extends('user.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('plugins/ajax-file-uploader/css/jquery.uploader.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title','Add New Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('user.cat.index'), 'Add Propety' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add New Property</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label for="pet-name" class="form-label">Pet Picture</label>
                        <input class="form-control" type="text" id="pet-name">
                    </div>
                    <div class="col">
                        <label for="qr-code" class="form-label">QR Code</label>
                        <input class="form-control" type="text" id="qr-code">
                    </div>
                    <div class="mb-3">
                        <label for="qr-code" class="form-label">QR Code</label>
                        <input class="form-control" type="text" id="qr-code">
                    </div>

                </div>
                <div class="mb-3">
                    <label for="pet-name" class="form-label">Pet Picture</label>
                    <input class="form-control" type="text" id="pet-name">

                </div>
                <div class="mb-3">
                    <label for="qr-code" class="form-label">QR Code</label>
                    <input class="form-control" type="text" id="qr-code">
                </div>
                <div class="mb-3">
                    <label for="petName" class="form-label">Pet Name</label>
                    <input class="form-control" type="text" id="petName">
                </div>
                <div class="mb-2">
                    <label for="statuss" class="form-label">Status</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="active-status"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inactive-status"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                </div>
                <div class="mb-2"></div>
                <div class="mb-3">
                    <label class="form-label">Whelped</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="foreign-no" class="form-label">Foreign No</label>
                    <input class="form-control" type="text" id="foreign-no">
                </div>
                <div class="mb-3">
                    <label for="dod" class="form-label">Date of Death</label>
                    <input type="date" class="form-control" id="dod">
                </div>
                <div class="mb-3">
                    <label for="field-registration" class="form-label">Registration</label>
                    <input class="form-control" type="text" id="field-registration">
                </div>
                <div class="mb-3">
                    <label for="breeder-id" class="form-label">Breeder ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <!-- <option selected="">Select Breeder ID</option> -->\
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender-id" class="form-label">Gender ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Gender ID</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="breed-id" class="form-label">Breed ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Breed ID</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="owner-id" class="form-label">Owner ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Owner ID</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="color-id" class="form-label">Color ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Color ID</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pattern-id" class="form-label">Pattern ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Pattern ID</option>
                        <option value="p1">Pattern One</option>
                        <option value="p2">Pattern Two</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="father-id" class="form-label">Father ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Father ID</option>
                        <option value="p1">Pattern One</option>
                        <option value="p2">Pattern Two</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mother-id" class="form-label">Mother ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Mother ID</option>
                        <option value="p1">Pattern One</option>
                        <option value="p2">Pattern Two</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="post-id" class="form-label">Post ID</label>
                    <select class="form-select mb-3 single-select" aria-label="">
                        <option selected="">Select Mother ID</option>
                        <option value="p1">Pattern One</option>
                        <option value="p2">Pattern Two</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="microchip" class="form-label">Microchip</label>
                    <input class="form-control" type="input" id="microchip">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input class="form-control" type="input" id="title">
                </div>
                <div class="mb-3">
                    <label for="verity" class="form-label">Verity</label>
                    <input class="form-control" type="input" id="verity">
                </div>
                <!-- <div class="mb-3">
                    <label for="breed-survey" class="form-label">Breed Survey</label>
                    <textarea class="form-control" id="breed_survey" placeholder="Breed Survey" rows="150"></textarea>
                </div> -->
                <div class="mb-3">
                    <label for="breeder-surveyor" class="form-label">Breeder Surveyor</label>
                    <input class="form-control" type="input" id="breeder-surveyor">
                </div>
                <div class="mb-7">
                    <label for="statuss" class="form-label">Suspend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="active-status"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inactive-status"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                </div>
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

            </div>
        </div>
        @endsection
        @section('script')
        <script>
            ClassicEditor
                .create(document.querySelector('#breed_survey'))
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '180px';
                })
                .catch(error => {
                    console.error(error);
                });

        </script>

        @endsection

        @section('scripts')
        <script src="{{asset('plugins/ajax-file-uploader/dist/jquery.uploader.min.js')}}"></script>
        <script>
            $(document).ready(function () {
                $("#pet-name").uploader({
                    multiple: false,
                    defaultValue: [{
                        name: "jquery",
                        url: "/path/to/jquery.jpg"
                    }],
                });
                $("#qr-code").uploader({
                    multiple: false,
                    defaultValue: [{
                        name: "jquery",
                        url: "/path/to/jquery.jpg"
                    }],
                })
            });

        </script>
        @endsection
