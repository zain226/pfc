@extends('user.layouts.app')
@section('title','Advertisement Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Advertisements' =>
        route('user.sell_cat.index'), 'Advertisement Detail' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Advertisement Detail</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Pet Name</th>
                        <td>{{$selling_ad->cat->pet_name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breed</th>
                        <td>{{$selling_ad->cat->breed->breed_value ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Title</th>
                        <td>{{$selling_ad->title ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Price (PKR)</th>
                        <td>{{$selling_ad->price ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Contact</th>
                        <td>{{$selling_ad->contact ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Status</th>
                        <td>{{ucwords($selling_ad->status) ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Add Status</th>
                        <td>{{ucwords($selling_ad->add_status) ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Created At</th>
                        <td>{{$selling_ad->created_at->format('d M Y') ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">End Date</th>
                        <td>{{date('d M Y', strtotime($selling_ad->created_at. ' + 15 days'))}}</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('user.sell_cat.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
