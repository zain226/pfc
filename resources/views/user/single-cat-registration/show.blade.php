@extends('user.layouts.app')
@section('title','Litter Registration Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Single Cat Registration' =>
            route('user.single_cat_reg.index'), 'Detail' => 'javascript:void(0);']])
            <h6 class="mb-0 text-uppercase">Registration Detail</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0">
                        <tr>
                            <th scope="col">Pet Name</th>
                            <td>{{$application->pet_name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Breed</th>
                            <td>{{$application->breed->breed_value ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Gender</th>
                            <td>{{$application->gender->gender_value ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Status</th>
                            <td>{{ucfirst($application->status) ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Breeder</th>
                            <td>{{$application->breeder->name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Owner</th>
                            <td>{{$application->breeder->name ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Kennel Name</th>
                            <td>{{$application->breeder->kennel ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Date of Birth</th>
                            <td>{{$application->whelped ?? ''}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Sire</th>
                            <td>No Information</td>
                        </tr>
                        <tr>
                            <th scope="col">Dam</th>
                            <td>No Information</td>
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
