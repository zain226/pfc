@extends('admin.layouts.app')
@section('title','Edit Service')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Services' =>
            route('admin.service.index'), 'Edit Service' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Edit Service</h6>
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
                    <form action="{{route('admin.service.update',$id)}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="service" class="form-label">Service Name</label>
                            <input type="text" class="form-control" name="service" id="service" value="{{$service->service ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="charges" class="form-label">Charges (PKR)</label>
                            <input type="number" class="form-control" name="charges" id="charges" value="{{$service->charges ?? ''}}">
                        </div>

                        <!-- Bottom Button -->
                        <div class="mb-2"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{route('admin.service.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Bottom Button -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
