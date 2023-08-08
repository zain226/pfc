@extends('admin.layouts.app')
@section('title','Litter Registration Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Litter Registration Detail' =>
            route('admin.litter_registration.index'), 'Show' => '']])
            <h6 class="mb-0 text-uppercase">Litter Registration Detail</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <tr>
                            <th scope="col">Stud ID</th>
                            <td><a href="{{route('admin.stud_certificate.show',$stud->id)}}" target="_blank">{{$stud->id ?? ''}}</a></td>
                        </tr>
                        <tr>
                            <th scope="col">Litter Status</th>
                            <td>{{ucfirst($stud->status) ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Breeder</th>
                            <td>{{$stud->dam->owner->user->breeder->name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Owner</th>
                            <td>{{$stud->dam->owner->name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Kennel Name</th>
                            <td>{{$stud->dam->owner->kennel ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Date of Birth</th>
                            <td>{{$stud->litters[0]->whelped ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Sire</th>
                            <td>{{$stud->sire->pet_name.' '.$stud->sire->registration ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Dam</th>
                            <td>{{$stud->dam->pet_name.' '.$stud->dam->registration ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Litter Detail</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Color</th>
                                        <th>Hair</th>
                                    </tr>
                                    @foreach($stud->litters as $litter)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$litter->pet_name ??''}}</td>
                                            <td>{{$litter->gender->gender_value ??' '}}</td>
                                            <td>{{$litter->color->color_value ??' '}}</td>
                                            <td>{{$litter->hair ??' '}}</td>
                                        </tr>
                                    @endforeach
                                </table>

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
                        <button type="submit" class="btn btn-primary" onclick="history.back()">Back to List</button>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
            <!-- End Bottom Buttons -->

        </div>
    </div>
@endsection
