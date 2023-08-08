@extends('admin.layouts.app')
@section('title','Show Event')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Events Management' => route('admin.event_management.index'), 'Show' => 'javascript:void(0);']])
            <h6 class="mb-0 text-uppercase">Show Membership Application</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <tr>
                            <th scope="col">Event Title</th>
                            <td>{{$event->title ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Event Date</th>
                            <td>{{$event->event_date ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Entry Closing Date</th>
                            <td>{{$event->entry_closing_date ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">City</th>
                            <td>{{$event->city ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Event Venue</th>
                            <td>{{$event->venue ?? ''}}</td>
                        </tr>

                        @foreach($judges as $j)
                        <tr>
                            <th scope="col">Judge {{$loop->iteration}}</th>
                            <td>{{$j ?? ''}}</td>
                        </tr>
                        @endforeach
                        @foreach($stewards as $j)
                        <tr>
                            <th scope="col">Steward {{$loop->iteration}}</th>
                            <td>{{$j ?? ''}}</td>
                        </tr>
                        @endforeach
                       
                        <tr>
                            <th scope="col">Show Category</th>
                            <td>{{ucfirst($event->show_category) ?? ''}}</td>
                        </tr>
                    </table>
                </div>

            </div>
            <!-- Bottom Buttons -->
            <div class="row">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" onclick="history.back()">Back to List</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <a href="{{route('admin.entry.index',$id)}}" class="btn btn-primary">Manage Members</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="d-grid">
                        <a href="{{route('admin.entry.create',$id)}}" class="btn btn-primary">Add Member+</a>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
            <!-- End Bottom Buttons -->
        </div>
    </div>
@endsection
