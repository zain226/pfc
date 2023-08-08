@extends('user.layouts.app')
@section('title','Add Registration Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Single Cat Registration' =>
        route('user.single_cat_reg.index'), 'Add Registration Detail' =>
        'javascript:void(0);']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add Registration Detail</h6>
            </div>
            <div class="card-body">
                <form action="{{route('user.single_cat_reg.store')}}" method="post" id="pet_form">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <div class="mb-3">
                        <label for="pet_name" class="form-label">Pet Name</label>
                        <input class="form-control" type="text" id="pet_name" name="pet_name">
                    </div>
                    <div class="mb-3">
                        <label for="whelped" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="whelped" name="whelped">
                    </div>
                    <div class="mb-3">
                        <label for="breed_id" class="form-label">Breed ID</label>
                        <select class="form-select mb-3 single-select" aria-label="" id="breed_id" name="breed_id">
                            <option selected="" value="">Select Breed</option>
                            @foreach($breeds as $breed)
                                <option value="{{$breed->id}}">{{$breed->breed_value ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="color_id" class="form-label">Color ID</label>
                        <select class="form-select mb-3 single-select" aria-label="" id="color_id" name="color_id">
                            <option selected="" value="">Select Color</option>
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->color_value ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gender_id" class="form-label">Gender ID</label>
                        <select class="form-select mb-3 single-select" aria-label="" id="gender_id" name="gender_id">
                            <option selected="" value="">Select Gender</option>
                            @foreach($genders as $gender)
                                <option value="{{$gender->id}}">{{$gender->gender_value ?? ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hair" class="form-label">Hair</label>
                        <select class="form-select mb-3 single-select" aria-label="" id="hair" name="hair">
                            <option selected="" value="">Select Hair</option>
                            <option value="Stock Hair">Stock Hair</option>
                            <option value="Stock Hair">Long Hair</option>
                        </select>
                    </div>
                    <!-- Bottom Button -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid">

                                <button type="button" class="btn btn-primary go" onclick="saveAndGoBack();">Save and Go Back to List</button>

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Bottom Button -->
                </form>
            </div>
        </div>
        @endsection
@section('scripts')
<script>
     function saveAndGoBack()
    {
        $('#go_back').val(1);
        $('#pet_form').submit();
    }
</script>
@endsection