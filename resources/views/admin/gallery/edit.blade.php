@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection
@section('title','Edit Media')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Gallery' =>
            route('admin.gallery.index'), 'Edit Media' => '']])

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
                    <h6 class="mb-0">Edit Media</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('admin.gallery.update',$id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="sire-pkc-no" class="form-label">Gallery Grid*</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="gallery_grid_id" name="gallery_grid_id">
                                <option selected="">Select Gallery Grid</option>
                                @foreach($grids as $grid)
                                    <option value="{{$grid->id ?? ''}}" {{($image->gallery_grid_id == $grid->id) ? 'selected' : ''}}>{{$grid->title ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image*</label>
                            <input class="form-control dropify" type="file" id="image" name="image" data-default-file="{{asset('storage/gallery/'.$image->image)}}">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position*</label>
                            <input class="form-control" type="number" id="position" name="position" value="{{$image->position ?? ''}}">
                        </div>
                        <!-- Bottom Buttons -->
                        <div class="mb-3"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <input type="reset" class="btn btn-danger">
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

    </script>
@endsection
