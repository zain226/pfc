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
                    <table id="record_table" class="table table-striped table-bordered" style="width:100%">
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
@section('scripts')
    <script>
        var table = $('#record_table').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.owner_management.datatable') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'contact', name: 'contact' },
                { data: 'address', name: 'address' },
                { data: 'kennel', name: 'kennel' },
                { data: 'registration', name: 'registration' },
                { data: 'action', searchable: false, orderable: false }
            ]
        });

    </script>
@endsection
