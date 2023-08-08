@section('styles')
        <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@extends('user.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('user.cat.index'), 'Edit' => '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Edit Property</h6>
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
                <div class="row">
                    <form method="post" action="{{route('user.cat.update',$id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <label for="pet-name" class="form-label">Pet Name</label>
                            <input type="hidden" name="is_pic_true" id="is_pic_true" value="{{($cat->pet_pic == null) ? 0 : 1}}">
                            <input class="form-control" type="text" id="pet-name" disabled value="{{$cat->pet_name ?? ''}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="pet-name" class="form-label">Pet Picture (Ideal Image Size 400x400 px)*</label>
                            <input class="form-control dropify" type="file" id="pet-name" name="pet_pic" data-default-file="{{asset('storage/cats/'.$cat->pet_pic)}}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="col-md-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
    @endsection
