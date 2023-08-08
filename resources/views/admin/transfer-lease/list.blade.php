@extends('admin.layouts.app')
@section('title','Transfer Lease Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Transfer Lease' =>
            route('admin.transfer_lease.index'), 'List' =>
            'javascript:void(0);']])
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
            <hr /> -->
            <div class="card">
                <div class="card-body">
                    {{--                <div class="d-flex align-items-center">--}}
                    {{--                    <h6 class="mb-0">Transfer Lease</h6>--}}
                    {{--                    <a href="{{route('admin.transfer_lease.create')}}"--}}
                    {{--                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">--}}
                    {{--                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">--}}

                    {{--                        </ion-icon>Add Transfer Lease Detail--}}
                    {{--                    </a>--}}
                    {{--                </div>--}}
                    <div class="table-responsive">
                        <table id="logs" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name of Cat - PKC No</th>
                                <th>Old Owner</th>
                                <th>New Owner</th>
                                <th>Submit Date</th>

                            </tr>

                            </thead>
                            <tbody>
                            @foreach($logs as $log)
                            <tr>
                                <td>{{$log->cat->pet_name ?? ''}} - {{$log->cat->registration ?? ''}}</td>
                                <td>{{$log->old_owner ?? ''}}</td>
                                <td>{{$log->new_owner ?? ''}}</td>
                                <td>{{$log->created_at ?? ''}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name of Cat - PKC No</th>
                                <th>Old Owner</th>
                                <th>New Owner</th>
                                <th>Submit Date</th>
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
        $('#logs').DataTable({
            "ordering": false
        });
    </script>
@endsection
