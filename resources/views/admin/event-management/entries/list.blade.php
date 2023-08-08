@extends('admin.layouts.app')
@section('title',$event->title.' '.$event->city. ' '.$event->event_date)
@section('styles')
{{--    <link href="{{asset('admin_assets/css/buttons.dataTables.min.css')}}" rel="stylesheet" />--}}
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Event' => route('admin.event_management.index'), 'Event Entries' =>
        route('admin.event_management.index'), 'List' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="alert alert-dismissible fade show py-2 bg-success">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white">
                                <ion-icon name="checkmark-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('message')}}</div>
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
                   
                    <div class="row ">
                        <div class="col-md-5">
                            <h6 class="mb-0">{{$event->title.'  '.$event->city .' '.$event->event_date ?? ''}}</h6>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('admin.entry.catalog',$eventId)}}"
                               class="btn btn-sm btn-outline-info px-5 ms-auto my-2">
                                <ion-icon name="cloud-download-sharp" role="img" class="md hydrated" aria-label="cloud download sharp"></ion-icon>

                                </ion-icon>Catalog
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('admin.entry.create',$eventId)}}"
                               class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                                <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                                </ion-icon>Add Cat Entry
                            </a>
                        </div>
                    </div>
                     <div class="row text-center">
                        <div class="col-md-12">
                        <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin.entry.index' ,$eventId)}}" method="GET">
                                <div class="row">
                                <div class="col-md-3 mt-2">
                                     <!--<label>Breed</label>-->
                                     <select class="form-control" name="breed">
                                    <option value="">Select Breed</option>
                                    @foreach($breeds as $b)
                                    @php($selected = $request->breed == $b->id ? 'selected' : '')
                                    <option value="{{$b->id}}" {{$selected}}>{{$b->breed_value}}</option>
                                    @endforeach
                                    
                                     </select>
                                </div>
                                <div class="col-md-3 mt-2">
                                     <!--<label>Class</label>-->
                                     <select class="form-control" name="class">
                                    <option value="">Select Class</option>
                                     @foreach(getClasses() as $c)
                                    @php($selected = $request->class == $c ? 'selected' : '')
                                    <option value="{{$c}}" {{$selected}}>{{$c}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 mt-2">
                                     <!--<label>Class</label>-->
                                     <select class="form-control" name="hair">
                                    <option value="">Select Hair Type</option>
                                     @foreach(getHairTypes() as $c)
                                    @php($selected = $request->hair == $c ? 'selected' : '')
                                    <option value="{{$c}}" {{$selected}}>{{$c}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <button class="btn btn-primary w-100">Submit</button>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <a href="{{route('admin.entry.index' ,$eventId)}}" class="btn btn-danger w-100">Reset</a>
                                </div>
                                </div>
                               
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
{{--                <div class="d-flex align-items-center">--}}
{{--                </div>--}}
                <div class="table-responsive">
                    <table id="show_entries" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Catalog ID</th>
                                <th>Group</th>
                                <th>Breed</th>
                                <th>Cat Name</th>
                                <th>Sire</th>
                                <th>Dam</th>
                                <th>Class</th>
                                <th>Owner</th>
                                <th>Hair</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($entries as $entry)
                            <tr>
                                <td>{{$entry->show_id ?? ''}}</td>
                                <td>{{$entry->breed->group->name ?? ''}}</td>
                                <td>{{$entry->breed->breed_value ?? ''}}</td>
                                <td>{{$entry->pet_name ?? ''}}</td>
                                <td>{{$entry->sire ?? ''}}</td>
                                <td>{{$entry->dam ?? ''}}</td>
                                <td>{{$entry->class ?? ''}}</td>
                                <td>{{$entry->owner_name ?? ''}}</td>
                                <td>{{$entry->hair ?? ''}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('admin.entry.show',[$entry->id])}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('admin.entry.edit',[$entry->id,$eventId])}}" class="text-warning"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Edit" aria-label="Edit"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        <a href="{{route('admin.entry.delete',$entry->id)}}" class="text-danger delete-confirm" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                            aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Catalog ID</th>
                                <th>Group</th>
                                <th>Breed</th>
                                <th>Cat Name</th>
                                <th>Sire</th>
                                <th>Dam</th>
                                <th>Class</th>
                                <th>Owner</th>
                                <th>Hair</th>
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
    <script src="{{asset('admin_assets/js/buttons.print.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#show_entries').DataTable( {
                ordering: false,
            } );
        } );
    </script>
@endsection
