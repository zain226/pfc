@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('admin.cat.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">List of all Cats</h6>
                    <a href="{{route('admin.cat.create')}}" class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add New Property
                    </a>
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
                    <table id="record_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Breed</th>
                                <th>Pet Name</th>
                                <th>Status</th>
                                <th>Registration</th>
                                <th>Microchip</th>
                                <th>Verity</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID #</th>
                                <th>Breed</th>
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
@section('scripts')
    <script>
        $(document).ready(function () {
            const table = $('#record_table').DataTable({
                "pageLength": 50,
                ordering: false,
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.cat.datatable') }}',
                columns: [
                    {data: 'id', name: 'id', searchable: true},
                    {data: 'breed_id', name: 'breed_id'},
                    {data: 'pet_name', name: 'pet_name'},
                    {data: 'status', name: 'status'},
                    {data: 'registration', name: 'registration'},
                    {data: 'microchip', name: 'microchip'},
                    {data: 'hair', name: 'hair'},
                    {data: 'action', searchable: false, orderable: false}
                ],
            });
            $('#record_table_wrapper input').unbind();
            $('#record_table_wrapper input').bind('input', function(e) {
                if(this.value.length >= 3 || e.keyCode == 13) {
                    // Call the API search function
                    table.search( this.value ).draw();
                }
            });
        })

    </script>
@endsection
