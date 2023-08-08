@extends('user.layouts.app')
@section('title','Cat Entered')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Cat Entered' =>
        route('user.event.cat_entered'), '' =>
        '']])
        <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase text-center">{{ $event->title.' '.$event->city. ' '.date('d-M-Y',strtotime($event->event_date)) ?? '' }}</h6>
                    <hr>
                    @foreach($entries as $entry)
                    <h2>{{$entry->class ?? ''}}</h2>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <th>{{$entry->pet_name ?? ''}} </th>
                                        <td>{{$entry->microchip ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{$entry->registration_no ?? ''}}</th>
                                        <td>{{$entry->dob ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{$entry->breed->group->name ?? ''}}</th>
                                        <td>{{$entry->breed->breed_value ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{$entry->sire ?? ''}}</th>
                                        <th>{{$entry->hair ?? ''}}</th>
{{--                                        <td>{{$entry->sire ?? ''}}</td>--}}
                                    </tr>
                                    <tr>
                                        <th>{{$entry->dam ?? ''}}</th>
{{--                                        <td>PK 02668</td>--}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
