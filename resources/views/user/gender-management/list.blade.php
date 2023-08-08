@extends('admin.layouts.app')
@section('title','Gender List')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Gender Management' =>
        route('admin.gender-management.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">List of all Genders</h6>
                    <a href="{{route('admin.gender-management.create')}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add New Property
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Gender ID</th>
                                <th>Gender Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($genders as $gender)
                            <tr>
                                <td>{{$gender->id ?? ''}}</td>
                                <td>{{$gender->gender_value ?? ''}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.gender-management.show' ,$gender->id)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.gender-management.edit',$gender->id)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="{{route('admin.gender-management.delete',$gender->id)}}" class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Gender ID</th>
                                <th>Gender Value</th>
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
