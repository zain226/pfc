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
                     @foreach($events as $key => $entries)
                     @php($event = getEvent($key))
                    <h6 class="mb-0 text-uppercase text-center">{{ $event->title.' '.$event->city. ' '.date('d-M-Y',strtotime($event->event_date)) ?? '' }}</h6>
                    <hr>
                    @foreach($entries as $entry)
                    <h2>{{$entry->class ?? ''}}</h2>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <th style="width:20%">Name:</th>
                                        <td style="width:30%" class="text-center">{{$entry->pet_name ?? ''}}</td>
                                        <th style="width:20%">Microchip # </th>
                                        <td style="width:30%" class="text-center">{{$entry->microchip ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Pk Number : </th>
                                        <td style="width:30%" class="text-center">{{$entry->registration_no ?? ''}}</td>
                                        <th style="width:20%">DOB:</th>
                                        <td style="width:30%" class="text-center">{{$entry->dob ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Group:</th>
                                        <td style="width:30%" class="text-center">{{$entry->breed->group->name ?? ''}}</td>
                                        <th style="width:20%">Breed</th>
                                        <td style="width:30%" class="text-center">{{$entry->breed->breed_value ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Sire</th>
                                        <td style="width:30%" class="text-center">{{$entry->sire ?? ''}}</td>
                                        <th style="width:20%">Hair</th>
                                        <td style="width:30%" class="text-center">{{$entry->hair ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th  style="width:20%">Dam</th>
                                        <td style="width:30%" class="text-center">{{$entry->dam ?? ''}}</td>
                                        <th  style="width:20%"></th>
                                        <td ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
