@extends('user.layouts.app')
@section('title','Event Management')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Events' =>
            route('user.event.entry.index'), 'List' =>
            'javascript:void(0);']])
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
            <hr /> -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">List of Events</h6>

{{--                        <a href="{{route('user.event_management.create')}}"--}}
{{--                           class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">--}}
{{--                            <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">--}}

{{--                            </ion-icon>--}}
{{--                            Add Cat Event--}}
{{--                        </a>--}}
                    </div>
                    <div class="table-responsive">
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-dismissible fade show py-2 bg-danger">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-white">
                                        <ion-icon name="close-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{Session::get('message')}}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="d-flex align-items-center">
                            
                        </div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Cat Event ID</th>
                                <th>Event Title</th>
                                <th>Event City</th>
                                <th>Event Date</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$event->id ?? ''}}</td>
                                    <td>{{$event->title ?? ''}}</td>
                                    <td>{{ucfirst($event->city) ?? ''}}</td>
                                    <td>{{$event->event_date}}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                            <a href="{{route('user.event.entry.entries' ,$event->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                               data-bs-placement="bottom" title=""
                                               data-bs-original-title="Entries"
                                               aria-label="Entries"><i class="bi bi-person-lines-fill"></i> View</a>
                                            <a href="{{route('user.event.entry.create',$event->id)}}" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip"
                                               data-bs-placement="bottom" title=""
                                               data-bs-original-title="Entries"
                                               aria-label="Entries"><i class="bi bi-plus"></i> Add</a>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Cat Event ID</th>
                                <th>Event Title</th>
                                <th>Event City</th>
                                <th>Event Date</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
