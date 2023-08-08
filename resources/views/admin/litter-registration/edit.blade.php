@extends('admin.layouts.app')
@section('title','Edit Litter Registration Detail')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
            route('admin.litter_registration.index'), 'Edit Litter Registration Detail' =>
            '']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Edit Litter Registration Detail</h6>
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
                        </table>
                    <form action="{{route('admin.litter_registration.update',$id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <input type="hidden" name="stud_id" value="{{$stud->id ?? ''}}" id="go_back">
                        <input type="hidden" name="whelped" value="{{$stud->litters[0]->whelped ?? ''}}">
                        <input type="hidden" name="father" value="{{$stud->sire_id ?? ''}}">
                        <input type="hidden" name="mother" value="{{$stud->dame_id ?? ''}}">
                        <input type="hidden" name="breed_id" value="{{$stud->breed_id ?? ''}}">
                        <input type="hidden" name="breeder_id" value="{{$stud->dam->owner->user->breeder->id ?? ''}}">
                        <input type="hidden" name="owner_id" value="{{$stud->dame_owner_id ?? ''}}">
                        <input type="hidden" name="status" value="completed">
                        <div class="mb-3">
                            @foreach($stud->litters as $litter)
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <input class="form-control" type="text" name="pet_name[]" value="{{old('pet_name')[$loop->index] ?? $litter->pet_name}}" placeholder="Pet Name">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" name="gender_id[]">
                                        <option selected="" value="">Select Gender</option>
                                        <option value="2" {{($litter->gender_id == '2') ? 'selected' : ''}}>Female</option>
                                        <option value="1" {{($litter->gender_id == '1') ? 'selected' : ''}}>Male</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" id="status" name="color_id[]">
                                        <option selected="" value="">Select Color</option>
                                        @foreach($colors as $color)
                                        <option value="{{$color->id}}" {{($color->id == $litter->color_id) ? 'selected' : ''}}>{{$color->color_value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select mb-3 single-select" aria-label="" id="status" name="hair[]">
                                        <option selected="" value="">Select Hair</option>
                                        <option value="Long Hair" {{($litter->hair == 'Long Hair') ? 'selected' : ''}}>Long Hair</option>
                                        <option value="Stock Hair" {{($litter->hair == 'Stock Hair') ? 'selected' : ''}}>Stock Hair</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="registration[]" value="{{old('registration')[$loop->index] ?? ++$newRegistration }}" placeholder="Registration Number">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="microchip[]" value="{{old('microchip')[$loop->index] ?? ''}}" placeholder="Microchip">
                                </div>
                            </div>
                            @endforeach
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <label for="status" class="form-label">Status</label>--}}
{{--                            <select class="form-select mb-3 single-select" aria-label="" id="status" name="status">--}}
{{--                                <option selected="" value="">Select Status</option>--}}
{{--                                <option value="pending" {{($stud->status == 'pending') ? 'selected' : ''}}>Pending</option>--}}
{{--                                <option value="in process" {{($stud->status == 'in process') ? 'selected' : ''}}>In Process</option>--}}
{{--                                <option value="on hold" {{($stud->status == 'on hold') ? 'selected' : ''}}>On Hold</option>--}}
{{--                                <option value="completed" {{($stud->status == 'completed') ? 'selected' : ''}}>Completed</option>--}}
{{--                                <option value="rejected" {{($stud->status == 'rejected') ? 'selected' : ''}}>Rejected</option>--}}
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
                                    <a href="{{route('admin.litter_registration.index')}}"
                                       class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
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
