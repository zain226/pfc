@extends('user.layouts.app')
@section('title','Transfer Lease Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Transfer Lease Detail' =>
        route('user.transfer_lease.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Transfer Lease Detail</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Breeder ID</th>
                        <td>Jivraj - Lifespan Toys</td>
                    </tr>
                    <tr>
                        <th scope="col">Old Owner ID</th>
                        <td>Jivraj</td>
                    </tr>
                    <tr>
                        <th scope="col">Action</th>
                        <td>ownership_transfer</td>
                    </tr>
                    <tr>
                        <th scope="col">Name of Cat - PKC No</th>
                        <td>Jivraj</td>
                    </tr>
                    <tr>
                        <th scope="col">Date From</th>
                        <td>0000-00-00</td>
                    </tr>
                    <tr>
                        <th scope="col">Date To</th>
                        <td>0000-00-00</td>
                    </tr>
                    <tr>
                        <th scope="col">Submit Date</th>
                        <td>2021-05-03 09:02:23</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('user.transfer_lease.index')}}">
                    <button type="submit" class="btn btn-primary">Back to List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->

    </div>
</div>
@endsection
