@extends('admin.layouts.app')
@section('title','Show Entry Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cat Event Entries' =>
            route('admin.entry.index',$entry->event_id), 'Show Entry Detail' => 'javascript:void(0);']])
            <h6 class="mb-0 text-uppercase">{{$entry->event->title ?? ''}} {{$entry->event->city ?? ''}} {{$entry->event->event_date ?? ''}}</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <tr>
                            <th scope="col">Catalog No</th>
                            <td>{{$entry->show_id ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Registration No</th>
                            <td>{{$entry->registration_no ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Pet Name</th>
                            <td>{{$entry->pet_name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Color</th>
                            <td>{{$entry->color->color_value ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">DOB</th>
                            <td>{{$entry->dob ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Sex</th>
                            <td>{{$entry->gender->gender_value ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Breeder</th>
                            <td>{{$entry->breeder->name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Microchip</th>
                            <td>{{$entry->microchip ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Hair</th>
                            <td>{{$entry->hair ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Sire</th>
                            <td>{{$entry->sire ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Dam</th>
                            <td>{{$entry->dam ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Owner Name</th>
                            <td>{{$entry->owner_name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Show Class</th>
                            <td>{{$entry->class ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Address</th>
                            <td>{{$entry->address ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Contact</th>
                            <td>{{$entry->contact ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Fee Amount</th>
                            <td>{{$entry->fee_amount ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Received By</th>
                            <td>{{$entry->received_by ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Received From</th>
                            <td>{{$entry->received_from ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Grading </th>
                            <td>
                                
                                {{$entry->title ? $entry->title->title : ''}}
                               
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Rank </th>
                            <td>
                                
                                 
                                {{$entry->position}}
                                
                            </td>
                        </tr>
                            <tr>
                            <th scope="col">Award</th>
                            <td>
                                {{ getAwardList($entry)}}
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <!-- Bottom Buttons -->
            <div class="mb-3"></div>
            <div class="row">
                <div class="col-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" onclick="history.back();">Back to List</button>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
            <!-- End Bottom Buttons -->
        </div>
    </div>
@endsection
