@extends('admin.layouts.app')
@section('title','Membership Applications')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Event Management' =>
        route('admin.event_management.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">List of all membership applications</h6>
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
                    <table id="applications" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr>
                                <td>{{$application->id ?? ''}}</td>
                                <td>{{$application->full_name ?? ''}}</td>
                                <td>{{$application->phone ?? ''}}</td>
                                <td>{{$application->email ?? ''}}</td>
                                <td>{{$application->status ?? ''}}</td>
                                <td>{{$application->created_at ?? ''}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.membership_application.show' ,$application->id)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.membership_application.edit',$application->id)}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="{{route('admin.membership_application.delete',$application->id)}}" class="text-danger" data-bs-toggle="tooltip"
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
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date</th>
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
        $('#applications').DataTable({
            "ordering": false
        });
    </script>
@endsection
