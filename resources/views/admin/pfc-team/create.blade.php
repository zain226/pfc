@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title','Add New')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">

        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Add Team' => route('admin.pfc-team.index'), 'Add Property' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add New Property</h6>
            </div>
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
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2">
                    <form action="{{route('admin.pfc-team.store')}}" method="post" enctype="multipart/form-data" id="cat_property">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="jud_pic" class="form-label">Team Member Picture</label>
                                <input class="form-control dropify" type="file" id="jud_pic" name="team_pic" data-height="100" data-default-file="">
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="team_name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="team_name" name="name" value="{{old('name')}}">
                        </div>
                        <div class="mb-3">
                            <label for="fb_link" class="form-label">Facebook Link</label>
                            <input class="form-control" type="url" id="fb_link" name="facebook_url" value="{{old('facebook_url')}}">
                        </div>
                        <div class="mb-3">
                            <label for="fb_link" class="form-label">Mail Link</label>
                            <input class="form-control" type="email" id="fb_link" name="mail_url" value="{{old('mail_url')}}">
                        </div>
                        <div class="mb-3">
                            <label for="desig" class="form-label">Designation</label>
                            <input class="form-control" type="text" id="desig" name="designation" value="{{old('designation')}}">
                        </div>
                         <div class="mb-3">
                            <label for="short_des" class="form-label">Short Description</label>
                            <input class="form-control" type="textarea" id="short_des" name="short_description" value="{{old('pet_name')}}">
                        </div>
                        <div class="mb-3">
                            <label for="long_des" class="form-label">Long Description</label>
                             <textarea class="form-control" id="detail" name="long_description">{{old('long_description')}}</textarea>
                        </div>
                         <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script src="{{asset('js/dropify.min.js')}}"></script>

 <script src="{{asset('ckeditor4/ckeditor.js')}}"></script>


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
     });
 CKEDITOR.replace( 'detail' );

</script>
@endsection
