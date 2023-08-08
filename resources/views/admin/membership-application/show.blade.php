@extends('admin.layouts.app')
@section('title','Show Membership Application')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Membership Application' => route('admin.membership_application.index'), 'Show' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Show Membership Application</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Full Name</th>
                        <td>{{$member->full_name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">CNIC</th>
                        <td>{{$member->cnic ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td>{{$member->email ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th>
                        <td>{{$member->phone ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">City</th>
                        <td>{{$member->city ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th>
                        <td>{{$member->address ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Status</th>
                        <td>{{ucwords($member->status) ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Picture</th>
                        <td><img style="width: 100px" src="{{asset('storage/breeders/'.$member->picture)}}"></td>
                    </tr>
                    <tr>
                        <th scope="col">Download Payment Slip</th>
                        <td><a href="{{asset('storage/application/slips/'.$member->slip)}}" download="" class="btn btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="col">Date</th>
                        <td>{{$member->created_at->format('d-m-Y') ?? ''}}</td>
                    </tr>
                </table>
            </div>

        </div>
         <!-- Bottom Buttons -->
         <div class="mb-3"></div>
            <div class="row">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="button" onclick="history.back()" class="btn btn-primary">Go Back</button>
                    </div>
                </div>
            </div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
