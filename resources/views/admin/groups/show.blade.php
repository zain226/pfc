@extends('admin.layouts.app')
@section('title','Read Group')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Groups' =>
        route('admin.group.index'), 'Show' => 'javascript:void(0);']])
        <h6 class="mb-0 text-uppercase">Show groups</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Group</th>
                        <td>{{$group->name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breeds</th>
                        <td>
                            @foreach($breeds as $breed)
                                @if(in_array($breed->id,json_decode($group->breeds,true)))
                                    <span class="badge bg-secondary">{{$breed->breed_value ?? ''}}</span>
                                @endif
                            @endforeach
                        </td>
                    </tr>


                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.group.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->

    </div>
</div>
@endsection
