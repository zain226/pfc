@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['PKC Team' => route('admin.pkc-team.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">PKC Team</h6>
                    <a href="{{route('admin.pkc-team.create')}}" class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add New Team Member
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pet Pic</th>
                                <th>Serial No #</th>
                                <th>Breed ID</th>
                                <th>Pet Name</th>
                                <th>Status</th>
                                <th>Registration</th>
                                <th>Microchip</th>
                                <th>Verity</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.cat.show' ,1)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.cat.edit',1)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                            width="44" height="44" alt="">
                                </td>
                                <td>16107</td>
                                <td>German Shepherd Cat</td>
                                <td>Hazel PK13059</td>
                                <td>Inactive</td>
                                <td>PK 13059</td>
                                <td>900215005518516</td>
                                <td>Long Hair</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                            aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Pet Pic</th>
                                <th>Serial No #</th>
                                <th>Breed ID</th>
                                <th>Pet Name</th>
                                <th>Status</th>
                                <th>Registration</th>
                                <th>Microchip</th>
                                <th>Verity</th>
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
