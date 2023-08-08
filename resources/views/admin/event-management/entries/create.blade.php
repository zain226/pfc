@extends('admin.layouts.app')
@section('title','Add Event Entry')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cat Event Entries' =>
            route('admin.entry.index',$eventId), 'Add Event Entry' => 'javascript:void(0);']])
            <div class="card">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-dismissible fade show py-2 bg-danger">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-white">
                                    <ion-icon name="close-circle-sharp"></ion-icon>
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
                            <div class="fs-3 text-white">
                                <ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                            <div class="fs-3 text-white">
                                <ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('error')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="prefill_errors"></div>
                <div class="card-header">
                    <h6 class="mb-0">Add Cat Entry For {{$event->title.'  '.$event->city .' '.$event->event_date ?? ''}}</h6>
                </div>
                <form method="post" action="{{route('admin.entry.store',$eventId)}}">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <input type="hidden" name="event_id" value="{{$eventId}}" id="event_id">
                    <input type="hidden" name="member_id" value="{{$user_id}}" id="member_id">
                    <input type="hidden" name="owner_id" value="" id="owner_id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="show_id" class="form-label">Catalog No</label>
                            <input class="form-control" type="text" id="show_id" name="show_id"
                                   value="{{$show_id ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="registration_no" class="form-label">Registration No</label>
                            <input class="form-control" type="text" id="registration_no" name="registration_no"
                                   value="{{old('registration_no')}}">
                        </div>
                        <div class="mb-3">
                            <label for="pet_name" class="form-label">Pet Name*</label>
                            <input class="form-control" type="text" id="pet_name" name="pet_name"
                                   value="{{old('pet_name')}}">
                        </div>
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Color</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="color_id" name="color_id">
                                    <option></option>
                                    @foreach($colors as $color)
                                        <option
                                            value="{{$color->id}}" {{$color->id == (old('color_id'))? 'selected' : ''}}>
                                            {{ $color->color_value ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">DOB*</label>
                            <input class="form-control" type="date" id="dob" name="dob"
                                   value="{{old('dob')}}">
                        </div>
                        <div class="mb-3">
                            <label for="gender_id" class="form-label">Sex*</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="gender_id" name="gender_id">
                                    <option></option>
                                    @foreach($genders as $gender)
                                        <option
                                            value="{{$gender->id}}" {{(old('gender') == $gender->id)? 'selected' : ''}}>{{$gender->gender_value ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="breed_id" class="form-label">Breed*</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="breed_id" name="breed_id">
                                    <option></option>
                                    @foreach($breeds as $breed)
                                        <option
                                            value="{{$breed->id}}" {{$breed->id == (old('breed_id'))? 'selected' : ''}}>
                                            {{ $breed->breed_value ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="breeder_id" class="form-label">Breeder</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="breeder_id" name="breeder_id">
                                    <option></option>
                                    @foreach($breeders as $breeder)
                                        <option
                                            value="{{$breeder->id}}" {{$breeder->id == (old('breeder_id'))? 'selected' : ''}}>
                                            {{ $breeder->name ?? '' }} - {{ $breeder->registration_no ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="microchip" class="form-label">Microchip</label>
                            <input class="form-control" type="text" id="microchip" name="microchip"
                                   value="{{old('microchip')}}">
                        </div>
                        <div class="mb-3">
                            <label for="hair" class="form-label">Hair</label>
                            <input class="form-control" type="text" id="hair" name="hair" value="{{old('hair')}}">
                        </div>
                        <div class="mb-3">
                            <label for="sire" class="form-label">Sire</label>
                            <input class="form-control" type="text" id="sire" name="sire" value="{{old('sire')}}">
                        </div>
                        <div class="mb-3">
                            <label for="dam" class="form-label">Dam</label>
                            <input class="form-control" type="text" id="dam" name="dam" value="{{old('dam')}}">
                        </div>
                        <div class="mb-3">
                            <label for="owner_name" class="form-label">Owner Name*</label>
                            <input class="form-control" type="text" id="owner_name" name="owner_name"
                                   value="{{old('owner_name')}}">
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Show Class*</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="class" name="class">
                                    <option></option>
                                    <option
                                        value="Baby Female" {{(old('class') == 'Baby Female')? 'selected' : ''}}>
                                        Baby Female
                                    </option>
                                    <option
                                        value="Baby Male" {{(old('class') == 'Baby Male')? 'selected' : ''}}>
                                        Baby Male
                                    </option>
                                    <option
                                        value="Puppy Female" {{(old('class') == 'Puppy Female')? 'selected' : ''}}>
                                        Puppy Female
                                    </option>
                                    <option
                                        value="Puppy Male" {{(old('class') == 'Puppy Male')? 'selected' : ''}}>
                                        Puppy Male
                                    </option>
                                    <option
                                        value="Junior Female" {{(old('class') == 'Junior Female')? 'selected' : ''}}>
                                        Junior Female
                                    </option>
                                    <option
                                        value="Junior Male" {{(old('class') == 'Junior Male')? 'selected' : ''}}>
                                        Junior Male
                                    </option>
                                    <option
                                        value="Youth Female" {{(old('class') == 'Youth Female')? 'selected' : ''}}>
                                        Youth Female
                                    </option>
                                    <option
                                        value="Youth Male" {{(old('class') == 'Youth Male')? 'selected' : ''}}>
                                        Youth Male
                                    </option>
                                    <option
                                        value="Open Female" {{(old('class') == 'Open Female')? 'selected' : ''}}>
                                        Open Female
                                    </option>
                                    <option
                                        value="Open Male" {{(old('class') == 'Open Male')? 'selected' : ''}}>
                                        Open Male
                                    </option>
                                    <option
                                        value="Veteran Female" {{(old('class') == 'Veteran Female')? 'selected' : ''}}>
                                        Veteran Female
                                    </option>
                                    <option
                                        value="Veteran Male" {{(old('class') == 'Veteran Male')? 'selected' : ''}}>
                                        Veteran Male
                                    </option>
                                    <option
                                        value="Champion Female" {{(old('class') == 'Champion Female')? 'selected' : ''}}>
                                        Champion Female
                                    </option>
                                    <option
                                        value="Champion Male" {{(old('class') == 'Champion Male')? 'selected' : ''}}>
                                        Champion Male
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address*</label>
                            <input class="form-control" type="text" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact*</label>
                            <input class="form-control" type="text" id="contact" name="contact">
                        </div>
                        <div class="mb-3">
                            <label for="fee_amount" class="form-label">Fee Amount</label>
                            <input class="form-control" type="text" id="fee_amount" name="fee_amount">
                        </div>
                        <div class="mb-3">
                            <label for="received_by" class="form-label">Received By</label>
                            <input class="form-control" type="text" id="received_by" name="received_by">
                        </div>
                        
                        <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Show</label>
                            <input class="form-control" type="text" id="" name="best_in_show">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Group</label>
                            <input class="form-control" type="text" id="" name="best_in_group">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Breed</label>
                            <input class="form-control" type="text" id="" name="best_in_breed">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">CACIB</label>
                            <input class="form-control" type="text" id="" name="cacib">
                        </div>
                        </div>
                        
                        
                        
                        <div class="mb-3">
                            <label for="received_from" class="form-label">Received From</label>
                            <input class="form-control" type="text" id="received_from" name="received_from">
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go
                                        Back
                                    </button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Button -->
                </form>
                <!-- End Bottom Button -->
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {

            $('#show_category').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Category',
                allowClear: true
            });

            $('#breed_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breed',
                allowClear: true
            });

            $('#breeder_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breeder',
                allowClear: true
            });

            $('#gender_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Gender',
                allowClear: true
            });
            $('#class').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Class',
                allowClear: true
            });
            $('#color_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Color',
                allowClear: true
            });

            //Ajax Call to Prefill
            $('#registration_no').change(function () {
                var registration_no = $('#registration_no').val();
                var event_id = $('#event_id').val();
                $.ajax({
                    url: '{{ route('admin.entry.prefill') }}',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "registration_no": registration_no,
                        "event_id": event_id,
                    },
                    success: function (result) {
                        if (result.success == 1) {
                            $('.prefill_errors').empty();
                            $.each(result.data, function (key, value) {
                                if (key != 'registration_no') {
                                    $('#' + key).val(value)
                                    $('#' + key).trigger('change');
                                }
                            });
                        }
                        if (result.success == 0) {
                            $('.prefill_errors').append(errorMessageHtml(result.msg));
                        }
                    },
                    error: function (data) {
                        if (data.status == 422) {
                            $('.prefill_errors').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if ($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.prefill_errors').append(errorMessageHtml(value));

                                    });
                                }
                            });

                        }
                    }
                });
            });
        });

        function saveAndGoBack() {
            $('#go_back').val(1);
        }

        function errorMessageHtml(value) {
            return '<div class="alert alert-dismissible fade show py-2 bg-danger">' +
                '<div class="d-flex align-items-center">' +
                '<div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>' +
                '</div>' +
                '<div class="ms-3">' +
                '<div class="text-white">' + value + '</div>' +
                '</div>' +
                '</div>' +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                '</div>';
        }

        function successMessageHtml(value) {
            return '<div class="alert alert-dismissible fade show py-2 bg-success">' +
                '<div class="d-flex align-items-center">' +
                '<div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>' +
                '</div>' +
                '<div class="ms-3">' +
                '<div class="text-white">' + value + '</div>' +
                '</div>' +
                '</div>' +
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                '</div>';
        }
    </script>
@endsection
