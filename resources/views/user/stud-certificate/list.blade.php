@extends('user.layouts.app')
@section('title','Stud Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('user.stud_certificate.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Stud Certificate</h6>
                    <a href="{{route('user.stud_certificate.create')}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add Stud Detail
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="stud_certificates" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Stud Certificate ID</th>
                                <th>Mating Date</th>
                                <th>Breed</th>
                                <th>Action</th>

                            </tr>

                        </thead>
                        <tbody>
                        @foreach($stud_certificates as $stud)
                            <tr>
                                <td>{{$stud->id ?? ''}}</td>
                                <td>{{$stud->mating_date ?? ''}}</td>
                                <td>{{$stud->studBreed->breed_value ?? ''}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('user.stud_certificate.show' ,$stud->id)}}"
                                           class="text-primary"
                                           data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                           data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        {{--                                            <a href="{{route('user.litter_registration.edit',1)}}" class="text-warning"--}}
                                        {{--                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""--}}
                                        {{--                                               data-bs-original-title="Edit" aria-label="Edit"><i--}}
                                        {{--                                                    class="bi bi-pencil-fill"></i></a>--}}
                                        {{--                                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"--}}
                                        {{--                                               data-bs-placement="bottom" title="" data-bs-original-title="Delete"--}}
                                        {{--                                               aria-label="Delete"><i class="bi bi-trash-fill"></i></a>--}}
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Stud Certificate ID</th>
                                <th>Mating Date</th>
                                <th>Breed</th>
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
