@extends('admin.layouts.app')
@section('title','Show Title')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Titles' =>
        route('admin.title.index'), 'Show' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Show Title</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Title</th>
                        <td>{{$title->title ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Created At</th>
                        <td>{{$title->created_at->format('d F Y H:i:s') ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Updated At</th>
                        <td>{{$title->updated_at->format('d F Y H:i:s') ?? ''}}</td>
                    </tr>

                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.title.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->

    </div>
</div>
@endsection
