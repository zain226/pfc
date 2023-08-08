@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title','Add New Blog')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">

        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Blogs' => route('admin.blogs.index'), 'Add Blog' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add New Blog</h6>
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
                   <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Title<span>*</span></label>
                                        <input type="text" required name="title" class="form-control"
                                               placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Video Url</label>
                                        <input type="text"  name="url" class="form-control"
                                               placeholder="Url">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="form-group">
                                        <label>Short Description<span>*</span></label>
                                        <input type="text" name="short_description"
                                               class="form-control"
                                               placeholder="Short Description">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label>Long Description<span>*</span></label>
                                    <div class="form-group">
                                   <textarea id="text" required name="long_description" rows="5" class="form-control ckeditor"
                                             placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Blog Image<span>*</span>(1200 x 600)</label>
                                    <input type="file" name="blog_image" required class="dropify" >
                                    @error('image')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-2">
                                    <h3>Seo</h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control"
                                               placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Meta Tags</label>
                                        <input type="text"  class="form-control" name="meta_tags" id="basicInput"
                                               placeholder="Enter Name">
                                        @error('tags')
                                        <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea rows="4" name="meta_description" class="form-control w-100"
                                                  placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
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
