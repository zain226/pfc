@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection
@section('title','Edit Breed')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Breed Management' =>
        route('admin.breed-management.index'), 'Add Propety' => '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Update New Breed</h6>
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
                <form method="post" action="{{route('admin.breed-management.update',$id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <div class="mb-3">
                        <label for="petName" class="form-label">Breed value</label>
                        <input class="form-control" type="text" id="petName" name="breed_value" value="{{$breed->breed_value ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Breed Image</label>
                        <input class="form-control dropify" type="file" id="image" name="image" data-default-file="{{asset('storage/breeds/'.$breed->image) ?? ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="breed_standard" class="form-label">Breed Standard</label>
                        <input class="form-control dropify" type="file" id="breed_standard" name="breed_standard" data-default-file="{{asset('storage/breeds/breed_standard/'.$breed->breed_standard) ?? ''}}" data-allowed-file-extensions="pdf">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Breed Detail</label>
                        <textarea class="form-control" id="detail" name="detail">{{$breed->detail ?? ''}}</textarea>
                    </div>
                    <!-- Bottom Buttons -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Update & Go Back</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <a href="{{route('admin.breed-management.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
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
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

        });
        CKEDITOR.replace( 'detail' );
        function saveAndGoBack()
        {
            $('#go_back').val(1);
        }

    </script>
@endsection
