@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Owner Management' =>
        route('admin.owner_management.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Owner Management</h6>
                    <a href="{{route('admin.owner_management.create')}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add Owner
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Owner ID</th>
                                <th>Owner Name</th>
                                <th>Owner Contact</th>
                                <th>Owner Address</th>
                                <th>Owner Kennel</th>
                                <th>Owner Registration</th>
                                <th>Action</th>

                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>8</td>
                                <td>Ejaz Raju Raj</td>
                                <td>0312544634</td>
                                <td>H#866 St#2 Mahala Fazalabad Dhoke...</td>
                                <td>Raj Berg House</td>
                                <td>164</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.owner_management.show' ,1)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.owner_management.edit',1)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Print Front"
                                            aria-label="Print Front"><i class="bi bi-printer-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ejaz Raju Raj</td>
                                <td>0312544634</td>
                                <td>H#866 St#2 Mahala Fazalabad Dhoke...</td>
                                <td>Raj Berg House</td>
                                <td>165</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.owner_management.show' ,1)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.owner_management.edit',1)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Print Front"
                                            aria-label="Print Front"><i class="bi bi-printer-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ejaz Raju Raj</td>
                                <td>0312544634</td>
                                <td>H#866 St#2 Mahala Fazalabad Dhoke...</td>
                                <td>Raj Berg House</td>
                                <td>164</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.owner_management.show' ,1)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.owner_management.edit',1)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-info" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Print Front"
                                            aria-label="Print Front"><i class="bi bi-printer-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Owner ID</th>
                                <th>Owner Name</th>
                                <th>Owner Contact</th>
                                <th>Owner Address</th>
                                <th>Owner Kennel</th>
                                <th>Owner Registration</th>
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
