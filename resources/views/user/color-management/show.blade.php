@extends('admin.layouts.app')
@section('title','Show Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Color Management' =>
        route('admin.color-management.index'), 'Show' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Show property</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Color</th>
                        <td>{{$color->color_value ?? ''}}</td>
                    </tr>

                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.color-management.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->

    </div>
</div>
@endsection
