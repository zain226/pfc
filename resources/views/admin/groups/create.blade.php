@extends('admin.layouts.app')
@section('title','Add New Group')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Group Management' =>
        route('admin.group.index'), 'Add Property' => 'javascript:void(0);']])

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
                <h6 class="mb-0">Add New Group</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.group.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Group Name</label>
                        <input class="form-control" required type="text" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="breeds" class="form-label">Select Breeds</label>
                        <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple" name="breeds[]" id="breeds">
                            @foreach($breeds as $breed)
                                <option value="{{$breed->id}}">{{$breed->breed_value ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Bottom Buttons -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
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
