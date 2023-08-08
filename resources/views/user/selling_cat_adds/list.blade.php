@extends('user.layouts.app')
@section('title','Advertisements')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Advertisements' =>
            route('user.sell_cat.index'), 'List' =>
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
                        <h6 class="mb-0">My Adds</h6>
                        <a href="{{route('user.sell_cat.create')}}"
                           class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                            <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="create add">

                            </ion-icon>
                            Create Add
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="sell_cat" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Title</th>
                                <th>Contact</th>
                                <th>Price (PKR)</th>
                                <th>Status</th>
                                <th>Add Status</th>
                                <th>Date time</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($selling_adds as $add)
                                <tr>
                                    <td>{{$add->id ?? '-'}}</td>
                                    <td>{{$add->title ?? '-'}}</td>
                                    <td>{{$add->contact ?? '-'}}</td>
                                    <td>{{$add->price ?? '-'}}</td>
                                    <td>{{ucwords($add->status) ?? '-'}}</td>
                                    <td>{{ucwords($add->add_status) ?? '-'}}</td>
                                    <td>{{$add->created_at->format('Y-m-d  h:i:s A') ?? '-'}}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{route('user.sell_cat.show' ,$add->id)}}" class="text-primary"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                               data-bs-original-title="Views" aria-label="Views"><i
                                                    class="bi bi-eye-fill"></i></a>
                                            <a href="{{route('user.sell_cat.edit',$add->id)}}" class="text-warning"
                                               data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                               data-bs-original-title="Edit" aria-label="Edit"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                            <a href="{{route('user.sell_cat.delete',$add->id)}}"
                                               class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                               data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                               aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Title</th>
                                <th>Contact</th>
                                <th>Amount (PKR)</th>
                                <th>Status</th>
                                <th>Add Status</th>
                                <th>Date time</th>
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
        $('#sell_cat').DataTable({
            "ordering": false
        });
    </script>
@endsection
