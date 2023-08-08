@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title','Add New Property')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <!--Breeder Modal--->
        <div class="modal fade" id="breeder_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="breeder_modal_body">
                        @include('admin.components.breeder_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('breeder_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Breed Modal--->
        <div class="modal fade" id="breed_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="breed_modal_body">
                        @include('admin.components.breed_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('breed_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Gender Modal--->
        <div class="modal fade" id="gender_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="gender_modal_body">
                        @include('admin.components.gender_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('gender_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Owner Modal--->
        <div class="modal fade" id="owner_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="owner_modal_body">
                        @include('admin.components.owner_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('owner_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Color Modal--->
        <div class="modal fade" id="color_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="color_modal_body">
                        @include('admin.components.color_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('color_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Cat Modal--->
        <div class="modal fade" id="cat_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="cat_modal_body">
                        @include('admin.components.cat_form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal('cat_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('admin.cat.index'), 'Add Property' =>
        '']])

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Add New Property</h6>
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
                    @if(Session::has('warning'))
                        <div class="alert alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-warning"><ion-icon name="warning-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-warning">{{Session::get('warning')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert alert-dismissible fade show py-2 bg-success">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white">{{Session::get('message')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-dismissible fade show py-2 bg-danger">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                                </div>
                                <div class="ms-3">
                                    <div class="text-white">{{Session::get('error')}}!</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2">
                    <form action="{{route('admin.cat.store')}}" method="post" enctype="multipart/form-data" id="cat_property">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="pet_pic" class="form-label">Pet Picture</label>
                                <input class="form-control dropify" type="file" id="pet_pic" name="pet_pic" data-height="100" data-default-file="">
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pet_name" class="form-label">Pet Name</label>
                            <input class="form-control" type="text" id="pet_name" name="pet_name" value="{{old('pet_name')}}">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 custom-admin-shadow-light radius-sm-admin" style="margin-left: 12px">
                                <div class="mb-2">
                                    <label for="status" class="form-label">Status</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="active_status" checked value="1">
                                    <label class="form-check-label" for="active_status">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inactive_status" value="0">
                                    <label class="form-check-label" for="inactive_status">Inactive</label>
                                </div>
                            </div>
                            <div class="col-md-3 custom-admin-shadow-light radius-sm-admin" style="margin-left: 10px">
                                <div class="mb-2">
                                    <label for="other_club" class="form-label">Other Club?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="other_kennel" value="1">
                                    <label class="form-check-label" for="active_suspend">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="other_kennel" value="0" checked>
                                    <label class="form-check-label" for="inactive_suspend">No</label>
                                </div>
                            </div>
                            <div class="col-md-3 custom-admin-shadow-light radius-sm-admin" style="margin-left: 10px">
                                <div class="mb-2">
                                    <label for="single_cat" class="form-label">Single Cat?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="single_cat" value="1">
                                    <label class="form-check-label" for="single_cat_yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="single_cat" value="0" checked>
                                    <label class="form-check-label" for="single_cat_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="whelped">Whelped</label>
                            <input type="date" class="form-control" name="whelped" value="{{old('whelped')}}">
                        </div>
                        <div class="mb-3">
                            <label for="foreign_no" class="form-label">Foreign No</label>
                            <input class="form-control" type="text" id="foreign_no" value="{{old('foreign_no')}}" name="foreign_no">
                        </div>
                        <div class="mb-3">
                            <label for="registration" class="form-label">Registration</label>
                            <input class="form-control" type="text" id="registration" name="registration" value="{{old('registration')}}">
                        </div>
                        <div class="mb-3">
                            <label for="breeder_id" class="form-label">Breeder ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 " aria-label="" name="breeder_id" id="breeder_id">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('breeder_id'))
                                            @foreach($breeders as $breeder)
                                                <option value="{{$breeder->id}}" {{($breeder->id == old('breeder_id'))? 'selected' : ''}}>{{$breeder->name ?? ''}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="openModal('breeder_modal');" class="btn btn-sm btn-primary"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add breeder"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="gender_id" class="form-label">Gender ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 select-2" aria-label="" id="gender_id" name="gender_id">
                                        <option value="">Select Gender</option>
                                        <option value="1" {{(old('gender_id') == 1)? 'selected' : ''}}>Male</option>
                                        <option value="2" {{(old('gender_id') == 2)? 'selected' : ''}}>Female</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="openModal('gender_modal');" class="btn btn-sm btn-primary"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add gender"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="breed_id" class="form-label">Breed ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="breed_select mb-3 form-select" aria-label="" id="breed_id" name="breed_id">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('breed_id'))
                                            @foreach($breeds as $breed)
                                                <option value="{{$breed->id}}" {{($breed->id == old('breed_id'))? 'selected' : ''}}>{{$breed->breed_value ?? ''}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="openModal('breed_modal');" class="btn btn-sm btn-primary"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add breed"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="owner_id" class="form-label">Owner ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 " aria-label="" id="owner_id" name="owner_id">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('owner_id'))
                                            @foreach($owners as $owner)
                                                <option value="{{$owner->id}}" {{($owner->id == old('owner_id'))? 'selected' : ''}}>{{$owner->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="openModal('owner_modal');" class="btn btn-sm btn-primary"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add owner"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Color ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 " aria-label="" id="color_id" name="color_id">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('color_id'))
                                            @foreach($colors as $color)
                                                <option value="{{$color->id}}" {{($color->id == old('color_id'))? 'selected' : ''}}>{{$color->color_value}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" onclick="openModal('color_modal');" class="btn btn-sm btn-primary"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add color"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="father" class="form-label">Father ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 " aria-label="" id="father" name="father">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('father'))
                                            @foreach($males as $male)
                                                <option value="{{$male->id}}" {{($male->id == old('father'))? 'selected' : ''}}>{{$male->pet_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="openModal('cat_modal');"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add cat"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="mother" class="form-label">Mother ID</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <select class="form-select mb-3 " aria-label="" id="mother" name="mother">
                                        <option selected="" value="">Enter at Least 2 character</option>
                                        @if(old('mother'))
                                            @foreach($females as $female)
                                                <option value="{{$female->id}}" {{($female->id == old('mother'))? 'selected' : ''}}>{{$female->pet_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-sm btn-primary" onclick="openModal('cat_modal');"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add cat"></ion-icon></button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="microchip" class="form-label">Microchip</label>
                            <input class="form-control" type="text" id="microchip" name="microchip" value="{{old('microchip')}}">
                        </div>
                        <div class="mb-3">
                            <label for="award" class="form-label">Title</label>
                            <input class="form-control" type="text" id="award" name="award" value="{{old('award')}}">
                        </div>
                        <div class="mb-3">
                            <label for="hair" class="form-label">Verity</label>
                            <input class="form-control" type="text" id="hair" name="hair" value="{{old('hair')}}">
                        </div>
                        <div class="row">
                            <div class="col-md-4 custom-admin-shadow-light radius-sm-admin" style="margin-left: 12px;">
                                <div class="mb-2">
                                    <label for="suspended" class="form-label">Suspend</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="suspend" id="active_suspend" value="1" {{(1 == old('suspend'))? 'checked' : ''}}>
                                    <label class="form-check-label" for="active_suspend">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="suspend" id="inactive_suspend" value="0" {{(0 == old('suspend'))? 'checked' : ''}}>
                                    <label class="form-check-label" for="inactive_suspend">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go Back</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{route('admin.cat.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script src="{{asset('js/dropify.min.js')}}"></script>
<script>
    function openModal(id) {
        $('#'+id).modal('show')
    }

    $('.modal').on('hidden.bs.modal', function (e) {
        // location.reload();
    })

    function closeModal(id)
    {
        $('#'+id).modal('hide')
        // location.reload();
    }


    $(document).ready(function () {

        $('.dropify').dropify({
            messages: {
                'default': '',
                'replace': 'Drag and drop or click to replace',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });

        // on first focus (bubbles up to document), open the menu
        $(document).on('focus', '.select2-selection.select2-selection--single', function (e) {
            $(this).closest(".select2-container").siblings('select:enabled').select2('open');
        });

        // steal focus during close - only capture once and stop propogation
        $('select.select2').on('select2:closing', function (e) {
            $(e.target).data("select2").$selection.one('focus focusin', function (e) {
                e.stopPropagation();
            });
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });


        $('#breed_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breed',
            allowClear: true
        });

        $('#gender_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Gender',
            allowClear: true
        });

        $('#breeder_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breeder',
            allowClear: true
        });

        $('#owner_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Owner',
            allowClear: true
        });

        $('#color_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Color',
            allowClear: true
        });

        $('#father').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Father',
            allowClear: true
        });

        $('#mother').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Mother',
            allowClear: true
        });

        //For Pop Ups only

        $('#cat_breed_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breed',
            allowClear: true
        });

        $('#cat_gender_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Gender',
            allowClear: true
        });

        $('#cat_breeder_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breeder',
            allowClear: true
        });

        $('#cat_owner_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Owner',
            allowClear: true
        });

        $('#cat_color_id').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Color',
            allowClear: true
        });

        $('#cat_father').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Father',
            allowClear: true
        });

        $('#cat_mother').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Mother',
            allowClear: true
        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#modal_breed_id').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breed',
            allowClear: true
        });

        $('#modal_gender_id').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Gender',
            allowClear: true
        });

        $('#modal_breeder_id').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Breeder',
            allowClear: true
        });

        $('#modal_owner_id').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Owner',
            allowClear: true
        });

        $('#modal_color_id').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Color',
            allowClear: true
        });

        $('#modal_father').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Father',
            allowClear: true
        });

        $('#modal_mother').select2({
            dropdownParent: $('#cat_modal_body'),
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Mother',
            allowClear: true
        });
    })
</script>

<script>
    $(document).ready(function () {

        // Submit Modal Color Form
        $('.color_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.color-management.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.color_errors').empty();
                        $('.color_message').empty();
                        $(".color_form").trigger('reset');
                        $('.color_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.color_errors').empty();
                            $('.color_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.color_errors').append(errorMessageHtml(value));

                                    });
                                }
                            });

                        }
                    }
                } );
                e.preventDefault();
            }
        );

        // Submit Modal Breed Form
        $('.breed_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.breed-management.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.breed_errors').empty();
                        $('.breed_message').empty();
                        $(".breed_form").trigger('reset');
                        $('.breed_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.breed_errors').empty();
                            $('.breed_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.breed_errors').append(errorMessageHtml(value));
                                    });
                                }
                            });

                        }
                    }
                } );
                e.preventDefault();
            }
        );

        // Submit Modal Gender Form
        $('.gender_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.gender-management.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.gender_errors').empty();
                        $('.gender_message').empty();
                        $(".gender_form").trigger('reset');
                        $('.gender_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.gender_errors').empty();
                            $('.gender_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.gender_errors').append(errorMessageHtml(value));
                                    });
                                }
                            });

                        }
                    }
                } );
                e.preventDefault();
            }
        );

        // Submit Modal Breeder Form
        $('.breeder_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.breeder-management.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.breeder_errors').empty();
                        $('.breeder_message').empty();
                        $(".breeder_form").trigger('reset');
                        $('.breeder_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.breeder_errors').empty();
                            $('.breeder_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.breeder_errors').append(errorMessageHtml(value));
                                    });
                                }
                            });

                        }
                    }
                } );
                e.preventDefault();
            }
        );

        // Submit Modal Owner Form
        $('.owner_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.owner_management.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.owner_errors').empty();
                        $('.owner_message').empty();
                        $(".owner_form").trigger('reset');
                        $('.owner_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.owner_errors').empty();
                            $('.owner_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.owner_errors').append(errorMessageHtml(value));
                                    });
                                }
                            });
                        }
                    }
                } );
                e.preventDefault();
            }
        );

        // Submit Cat Form
        $('.cat_form' ).submit(
            function( e ) {
                e.preventDefault();
                $.ajax( {
                    url: '{{ route('admin.cat.store') }}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        $('.cat_errors').empty();
                        $('.cat_message').empty();
                        $(".cat_form").trigger('reset');
                        $('.cat_message').append(successMessageHtml(result.message));
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.cat_errors').empty();
                            $('.cat_message').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.cat_errors').append(errorMessageHtml(value));
                                    });
                                }
                            });
                        }
                    }
                } );
                e.preventDefault();
            }
        );

    });

    function errorMessageHtml(value)
    {
        return '<div class="alert alert-dismissible fade show py-2 bg-danger">'+
        '<div class="d-flex align-items-center">'+
        '<div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>'+
        '</div>'+
        '<div class="ms-3">'+
        '<div class="text-white">'+value+'</div>'+
        '</div>'+
        '</div>'+
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
        '</div>';
    }

    function successMessageHtml(value)
    {
        return  '<div class="alert alert-dismissible fade show py-2 bg-success">'+
            '<div class="d-flex align-items-center">'+
            '<div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>'+
            '</div>'+
            '<div class="ms-3">'+
            '<div class="text-white">'+value+'</div>'+
            '</div>'+
            '</div>'+
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
            '</div>';
    }
    
    function saveAndGoBack()
    {
        $('#go_back').val(1);
    }
</script>

<script>
    $(document).ready(function() {
        // Color Remote Select
        $("#color_id").select2({
            ajax: {
                url: "{{route('admin.get_colors_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // Owner Remote Select
        $("#owner_id").select2({
            ajax: {
                url: "{{route('admin.get_owners_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // Owner Remote Select
        $("#breeder_id").select2({
            ajax: {
                url: "{{route('admin.get_breeders_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // Owner Remote Select
        $("#breed_id").select2({
            ajax: {
                url: "{{route('admin.get_breeds_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // Father Remote Select
        $("#father").select2({
            ajax: {
                url: "{{route('admin.get_cat_sires_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // Father Remote Select
        $("#mother").select2({
            ajax: {
                url: "{{route('admin.get_cat_dams_json')}}",
                type: "get",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchString: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $("#gender_id").select2();

    });

</script>
@endsection
