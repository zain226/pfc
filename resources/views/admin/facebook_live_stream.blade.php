@extends('admin.layouts.app')
@section('title','Facebook Live Stream')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Facebook Live Stream' =>
        'javascript:void(0);']])

        <div class="card">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{ $error }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            @if(Session::has('warning'))
                <div class="alert alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="fs-3 text-warning">
                            <ion-icon name="warning-sharp"></ion-icon>
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
                        <div class="fs-3 text-white">
                            <ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                        <div class="fs-3 text-white">
                            <ion-icon name="close-circle-sharp"></ion-icon>
                        </div>
                        <div class="ms-3">
                            <div class="text-white">{{Session::get('error')}}!</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-body">
                <form action="{{route('admin.live_stream.update',$id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="code" class="form-label">Live Stream Code Here</label>
                        <textarea class="form-control" id="code" name="code" rows="7">{{$live_stream->code ?? ''}}</textarea>
                    </div>
                    <!-- Bottom Button -->
                    <div class="mb-2"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Bottom Button -->
                </form>
            </div>
        </div>
        @endsection
