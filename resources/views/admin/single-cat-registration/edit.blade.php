@extends('admin.layouts.app')
@section('title','Edit Litter Registration Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Single Cat Registration' =>
            route('admin.single_cat_reg.index'), 'Edit Registration Detail' =>
            'javascript:void(0);']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Edit Registration Detail</h6>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-dismissible fade show py-2 bg-danger">
                                <div class="d-flex align-items-center">
                                    <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{ $error }}</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-dismissible fade show py-2 bg-success">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                                    <div class="fs-3 text-white"><ion-icon name="crossmark-circle-sharp"></ion-icon>
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-white">{{Session::get('error')}}</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    <table class="table mb-0">
                            <tr>
                                <th scope="col">Pet Name</th>
                                <td>{{ucfirst($application->pet_name) ?? ''}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Color</th>
                                <td>{{ucfirst($application->color->color_value) ?? ''}}</td>
                            </tr>
                            <tr>
                                <th scope="col">Gender</th>
                                <td>{{ucfirst($application->gender->gender_value) ?? ''}}</td>
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
                            <tr>
                                <th scope="col">Hair</th>
                                <td>{{$application->hair ?? ''}}</td>
                            </tr>
                        </table>
                        @if($application->status == 'pending')
                    <form action="{{route('admin.single_cat_reg.update',$id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <input type="hidden" name="whelped" value="{{$application->whelped ?? ''}}">
                        <input type="hidden" name="father" value="{{$sire_id ?? ''}}">
                        <input type="hidden" name="mother" value="{{$dam_id ?? ''}}">
                        <input type="hidden" name="breed_id" value="{{$application->breed_id ?? ''}}">
                        <input type="hidden" name="breeder_id" value="{{$application->breeder_id ?? ''}}">
                        <input type="hidden" name="owner_id" value="{{$application->owner_id ?? ''}}">
                        <input type="hidden" name="status" value="completed">
                        <div class="mb-3">
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <input class="form-control" type="text" name="pet_name" value="{{old('pet_name')?? $application->pet_name}}" placeholder="Pet Name">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" name="gender_id">
                                        <option selected="" value="">Select Gender</option>
                                        <option value="2" {{($application->gender_id == '2') ? 'selected' : ''}}>Female</option>
                                        <option value="1" {{($application->gender_id == '1') ? 'selected' : ''}}>Male</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" id="status" name="color_id">
                                        <option selected="" value="">Select Color</option>
                                        @foreach($colors as $color)
                                        <option value="{{$color->id}}" {{($color->id == $application->color_id) ? 'selected' : ''}}>{{$color->color_value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" id="status" name="hair">
                                        <option selected="" value="">Select Hair</option>
                                        <option value="Long Hair" {{($application->hair == 'Long Hair') ? 'selected' : ''}}>Long Hair</option>
                                        <option value="Stock Hair" {{($application->hair == 'Stock Hair') ? 'selected' : ''}}>Stock Hair</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="registration" value="{{old('registration') ?? ++$newRegistration }}" placeholder="Registration Number">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="microchip" value="{{old('microchip') ?? ''}}" placeholder="Microchip">
                                </div>
                            </div>
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <label for="status" class="form-label">Status</label>--}}
{{--                            <select class="form-select mb-3 single-select" aria-label="" id="status" name="status">--}}
{{--                                <option selected="" value="">Select Status</option>--}}
{{--                                <option value="pending" {{($application->status == 'pending') ? 'selected' : ''}}>Pending</option>--}}
{{--                                <option value="in process" {{($application->status == 'in process') ? 'selected' : ''}}>In Process</option>--}}
{{--                                <option value="on hold" {{($application->status == 'on hold') ? 'selected' : ''}}>On Hold</option>--}}
{{--                                <option value="completed" {{($application->status == 'completed') ? 'selected' : ''}}>Completed</option>--}}
{{--                                <option value="rejected" {{($application->status == 'rejected') ? 'selected' : ''}}>Rejected</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <!-- Bottom Button -->
                        <div class="mb-3"></div>
                        <div class="row">
                            <div class="col-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Generate Pedigree</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Generate Pedigree & Go Back</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{route('admin.single_cat_reg.index')}}"
                                       class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                        @endif
                    <!-- End Bottom Button -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function saveAndGoBack() {
            $('#go_back').val(1);
        }
    </script>
@endsection
