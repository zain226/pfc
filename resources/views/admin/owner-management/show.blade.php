@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Owner Management' =>
        route('admin.owner_management.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Show Owner</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Owner Name</th>
                        <td>{{$owner->name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Onwer contact :</th>
                        <td>{{$owner->contact ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Onwer Address</th>
                        <td>{{$owner->address ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Onwer kennel</th>
                        <td>{{$owner->kennel ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Onwer Registration</th>
                        <td>{{$owner->registration ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Picture</th>
                        <td>-</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.owner_management.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>

        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
