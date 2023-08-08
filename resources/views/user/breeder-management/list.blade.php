@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Breeder Management' =>
        route('admin.breeder-management.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
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
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Breeder Management</h6>
                    <a href="{{route('admin.breeder-management.create')}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add Property
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="record_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Breeder ID</th>
                                <th>Breeder Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Kennel</th>
                                <th>Registration Breeder</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Breeder ID</th>
                                <th>Breeder Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Kennel</th>
                                <th>Registration Breeder</th>
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
        var table = $('#record_table').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.breeder-management.datatable') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'contact', name: 'contact' },
                { data: 'email', name: 'email' },
                { data: 'kennel', name: 'kennel' },
                { data: 'registration_no', name: 'registration_no' },
                { data: 'action', searchable: false, orderable: false }
            ]
        });

    </script>
@endsection
