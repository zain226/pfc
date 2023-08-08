@section('styles')
<link rel="stylesheet" href="{{asset('plugins/ajax-file-uploader/css/jquery.uploader.css')}}">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection

@extends('admin.layouts.app')
@section('title','Add New Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Breeder Management' => route('admin.breeder-management.index'), 'Add Propety' =>
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
            <form method="post" action="{{route('admin.breeder-management.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="go_back" value="0" id="go_back">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="breeder_name" class="form-label">Breeder Name</label>
                        <input class="form-control" type="text" id="breeder_name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact </label>
                        <input class="form-control" type="text" id="contact" name="contact">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input class="form-control" type="text" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input class="form-control" type="text" id="petName" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="kennel" class="form-label">Kennel</label>
                        <input class="form-control" type="text" id="petName" name="kennel">
                    </div>
                    <div class="mb-3">
                        <label for="breeder_pic" class="form-label">Picture</label>
                        <input class="form-control" type="file" id="breeder_pic" name="pic">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="breeder-password" class="form-label">Breeder Password</label>
                        <input class="form-control" type="password" id="breeder-password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="registration-breeder" class="form-label">Registration Breeder</label>
                        <input class="form-control" type="text" id="registration-breeder" name="registration_no">
                    </div>
                    <div class="mb-3"></div>
                    <div class="mb-3">
                        <label for="permanent_member" class="form-label">Permanent member</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="permanent_member" id="permanent_member" value="1">
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="permanent_member" id="inactive-status" value="0" checked>
                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                    </div>
                    <div class="mb-3"></div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Suspend</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="suspended" id="active-status" value="1">
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="suspended" id="inactive-status" value="0" checked>
                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                    </div>
                    <!-- Bottom Button -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go Back</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <a href="{{route('admin.breeder-management.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Bottom Button -->


                </div>
            </form>
        </div>
        @endsection
        @section('scripts')
        <script src="{{asset('plugins/ajax-file-uploader/dist/jquery.uploader.min.js')}}"></script>
        <script src="{{asset('js/dropify.min.js')}}"></script>
        <script>

            $(document).ready(function () {
                $('#breeder_pic').dropify({
                    messages: {
                        'default': '',
                    }
                });
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'
                    }
                });

            });
            function saveAndGoBack()
            {
                $('#go_back').val(1);
            }
        </script>
        @endsection

