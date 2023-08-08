@extends('user.layouts.app')
@section('title','Event Entries')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Events' => route('user.event.entry.index'), 'Entries' =>
        'javascript:void(0);']])
        <!--end breadcrumb-->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6>
        <hr /> -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">{{$event->title ?? ''}}</h6>
                    <a href="{{route('user.event.entry.catalog',base64_encode($eventId))}}"
                       class="btn btn-sm btn-outline-info px-5 ms-auto my-2">
                        <ion-icon name="cloud-download-sharp" role="img" class="md hydrated" aria-label="cloud download sharp"></ion-icon>

                        </ion-icon>Catalog
                    </a>
                    <a href="{{route('user.event.entry.create',$eventId)}}"
                        class="btn btn-sm btn-outline-primary px-5 ms-auto my-2">
                        <ion-icon name="add-sharp" role="img" class="md hydrated" aria-label="add user">

                        </ion-icon>Add New Entry
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Catalog ID</th>
                                <th>Group</th>
                                <th>Breed</th>
                                <th>Cat Name</th>
                                <th>Class</th>
                                <th>Event</th>
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
                                <td>{{$entry->class ?? ''}}</td>
                                <td>{{ $entry->event->title.' '.$entry->event->city. ' '.date('d-M-Y',strtotime($entry->event->event_date)) ?? '' }}</td>
                                <td>{{$entry->hair ?? ''}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('user.event.entry.show',$entry->id)}}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Views" aria-label="Views"><i
                                                class="bi bi-eye-fill"></i></a>
{{--                                        <a href="{{route('user.event.entry.catalog',base64_encode($entry->event->id))}}"--}}
{{--                                           class="btn btn-sm btn-outline-info px-2 ms-auto my-1">--}}
{{--                                            <ion-icon name="cloud-download-sharp" role="img" class="md hydrated" aria-label="cloud download sharp"></ion-icon>--}}

{{--                                            </ion-icon>Catalog--}}
{{--                                        </a>--}}
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
                                <th>Class</th>
                                <th>Event</th>
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
