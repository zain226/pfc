@extends('admin.layouts.app')
@section('title','Stud Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('admin.stud_certificate.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                @if(Session::has('warning'))
                    <div class="alert alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-warning">
                                <ion-icon name="warning-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-warning">{{Session::get('warning')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-dismissible fade show py-2 bg-success">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="checkmark-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('message')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('error')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Stud Certificate</h6>
                    <a href="{{route('admin.stud_certificate.create')}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add Stud Detail
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="stud_certificates" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Breed</th>
                                <th>Name Of Sire - PKC No</th>
                                <th>Dam Owner ID</th>
                                <th>Action</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach($certificates as $certificate)
                            <tr>
                                <td>{{$certificate->id ?? ''}}</td>
                                <td>{{$certificate->studBreed->breed_value ?? ''}}</td>
                                <td>{{$certificate->sire->pet_name ?? ''}} - {{$certificate->sire->registration ?? ''}}</td>
                                <td>{{$certificate->damOwner->name ?? ''}} - {{$certificate->damOwner->kennel ?? ''}}</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.stud_certificate.show' ,$certificate->id)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
{{--                                        <a href="{{route('admin.stud_certificate.edit',$certificate->id)}}" class="text-warning"--}}
{{--                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""--}}
{{--                                            data-bs-original-title="Edit" aria-label="Edit"><i--}}
{{--                                                class="bi bi-pencil-fill"></i></a>--}}
                                        <a href="{{route('admin.stud_certificate.delete',$certificate->id)}}" class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Breed</th>
                                <th>Name Of Sire - PKC No</th>
                                <th>Dam Owner ID</th>
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
@section('scripts')
    <script>
        $('#stud_certificates').DataTable({
            order: [[0, 'desc']],
        });
    </script>
@endsection
