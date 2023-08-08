@extends('admin.layouts.app')
@section('title','Litter Registration Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
            route('admin.litter_registration.index'), 'List' =>
            'javascript:void(0);']])
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
            <hr /> -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Litter Registration</h6>
                        {{--                    <a href="{{route('admin.litter_registration.create')}}"--}}
                        {{--                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">--}}
                        {{--                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">--}}

                        {{--                        </ion-icon>Add Litter Registration Detail--}}
                        {{--                    </a>--}}
                    </div>
                    <div class="table-responsive">
                        @if(Session::has('warning'))
                            <div class="alert alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-warning"><ion-icon name="warning-sharp"></ion-icon>
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
                                    <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                                    <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{Session::get('message')}}!</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <table id="litter_reg_table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Stud ID</th>
                                <th>Status</th>
                                <th>Kennel Name</th>
                                <th>Date of Birth</th>
                                <th>Action</th>

                            </tr>

                            </thead>
                            <tbody>
                            @foreach($studs as $stud)
                                <tr>
                                    <td><a href="{{route('admin.stud_certificate.show',$stud->id)}}" target="_blank">{{$stud->id}}</a></td>
                                    <td>{{ucfirst($stud->status)}}</td>
                                    <td>{{$stud->dam->owner->kennel ?? ''}}</td>
                                    <td>{{$stud->litters[0]->whelped ?? ''}}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{route('admin.litter_registration.show' ,$stud->id)}}"
                                               class="text-primary"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                               data-bs-original-title="Views" aria-label="Views"><i
                                                    class="bi bi-eye-fill"></i></a>
                                            <a href="{{route('admin.litter_registration.edit',$stud->id)}}" class="text-warning"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                               data-bs-original-title="Edit" aria-label="Edit"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            @if($stud->status == 'pending')
                                            <a href="{{route('admin.litter_registration.delete',$stud->id)}}" class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                               data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                               aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                          

@endif
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Stud ID</th>
                                <th>Status</th>
                                <th>Kennel Name</th>
                                <th>Date of Birth</th>
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
        var table = $('#litter_reg_table').DataTable({
            ordering: false,
        });
    </script>
@endsection
