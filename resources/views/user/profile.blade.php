@extends('user.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title','Profile')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Profile' =>
        route('user.dashboard'), '' =>
        '']])
        <!--end breadcrumb-->
        <!-- Start Content -->
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card radius-10">
                    <div class="card-body">
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
                        @if(Session::has('warning'))
                            <div class="alert alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-warning"><ion-icon name="warning-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-warning">{{Session::get('warning')}}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(Session::has('message'))
                            <div class="alert alert-dismissible fade show py-2 bg-success">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{Session::get('message')}}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-dismissible fade show py-2 bg-danger">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{Session::get('error')}}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form method="post" action="{{route('user.profile.update',$breeder->id)}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="is_pic_true" id="is_pic_true" value="{{($breeder->pic == null) ? 0 : 1}}">
                            <h5 class="mb-3">Edit Profile</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="file" name="pic" data-default-file="{{asset('storage/breeders/'.$breeder->pic)}}" class="dropify">
                                </div>
                                <div class="col-md-8">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label class="form-label">Full Name</label>
                                            <input type="text"  class="form-control" value="{{$breeder->name ?? ''}}" disabled>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Kennel Name</label>
                                            <input type="text" class="form-control" value="{{$breeder->kennel ?? 'N/A'}}" disabled>
                                        </div>
                                        <div class="col-9">
                                            <label class="form-label">Password (Leave it empty if don't want to change password)</label>
                                            <input class="form-control" type="password" name="password" autocomplete="new-password" id="txtPassword"/>
                                            <span id="toggle_pwd" class="fa fa-fw fa-eye field_icon" style="margin-top: -24px;margin-right: 10px;cursor: pointer;z-index: 2;position: absolute;right: 190px;"></span>
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Membership No</label>
                                            <input type="text" readonly class="form-control" value="{{$breeder->registration_no ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-3">
                                <div class="col-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value="{{$breeder->address ?? ''}}" name="address">
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="show_address" name="show_address" value="1" {{($breeder->show_address == 1) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="show_address">Visibility?</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Phone No</label>
                                    <input type="tel" class="form-control" value="{{$breeder->contact ?? ''}}" name="contact">
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="show_phone" name="show_phone" value="1" {{($breeder->show_phone == 1) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="show_phone">Visibility?</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Email address</label>
                                    <input type="email" readonly class="form-control" value="{{$breeder->email ?? ''}}">
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="show_email" name="show_email" value="1" {{($breeder->show_email == 1) ? 'checked' : ''}}>
                                        <label class="form-check-label" for="show_email">Visibility?</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" value="{{$breeder->city ?? ''}}" name="city">
                                </div>
                            </div>
                            <div class="text-start mt-3">
                                <button type="submit" class="btn btn-dark px-4">Save Changes</button>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        <!-- End Content -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.dropify').dropify({
                messages: {
                    'default': '',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

            var drEvent = $('.dropify').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                $('#is_pic_true').val(0);
            });
        });

    </script>
    <script type="text/javascript">
        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#txtPassword").attr("type", type);
            });
        });
    </script>
@endsection
