@extends('admin.layouts.app')
@section('title','Edit Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Color Management' =>
        route('admin.color-management.index'), 'Edit Property' => 'javascript:void(0);']])

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
                <h6 class="mb-0">Update Property</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.color-management.update',$id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="colorName" class="form-label">Color value</label>
                        <input class="form-control" type="input" id="colorName" name="color_value" value="{{$color->color_value ?? ''}}">
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
                                <a href="{{route('admin.color-management.index')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>

            <!-- End Bottom Buttons -->

        </div>
    </div>
    @endsection
