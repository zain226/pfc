@extends('user.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('user.cat.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="record_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pet Pic</th>
                                <th>Breed ID</th>
                                <th>Pet Name</th>
                                <th>Registration</th>
                                <th>Microchip</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Pet Pic</th>
                                <th>Breed ID</th>
                                <th>Pet Name</th>
                                <th>Registration</th>
                                <th>Microchip</th>
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
                ajax: '{{ route('user.cat.datatable') }}',
                columns: [
                    {data: 'pet_pic', name: 'pet_pic', searchable: true},
                    {data: 'breed_id', name: 'breed_id'},
                    {data: 'pet_name', name: 'pet_name'},
                    // {data: 'status', name: 'status'},
                    {data: 'registration', name: 'registration'},
                    {data: 'microchip', name: 'microchip'},
                    // {data: 'hair', name: 'hair'},
                    {data: 'action', searchable: false, orderable: false}
                ],
            });
            $('#record_table input').unbind();
            $('#record_table input').bind('keyup', function(e) {
                if (e.keyCode == 13) {
                    table.search( this.value ).draw();
                }
            });
        })

    </script>
@endsection
