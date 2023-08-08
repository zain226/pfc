@extends('user.layouts.app')
@section('title','Add Event Entry')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Cat Event Entries' =>
            route('user.event.entry.index'), 'Add Event Entry' => 'javascript:void(0);']])
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
                    <h6 class="mb-0">{{ $event->title.' '.$event->city. ' '.date('d-M-Y',strtotime($event->event_date)) ?? '' }}</h6>
                </div>
                <form method="post" action="{{route('user.event.entry.store')}}" id="entry_form">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <input type="hidden" name="member_id" value="{{$user_id}}" id="member_id">
                    <input type="hidden" name="event_id" value="{{$event->id}}" id="event_id">
                    <input type="hidden" name="show_id" value="{{$user_id}}" id="show_id">
                    <input type="hidden" name="owner_id" value="" id="owner_id">
                    <input type="hidden" name="received_by" value="" id="received_by">
                    <input type="hidden" name="received_from" value="" id="received_from">
                    <div class="card-body">
                       
                        <div class="mb-3">
                            <label for="registration_no" class="form-label">Select Cat</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="registration_no"
                                        name="registration_no">
                                    <option></option>
                                    @foreach($cats as $cat)
                                        <option
                                            value="{{$cat->registration}}" {{$cat->id == (old('registration_no'))? 'selected' : ''}}>
                                            {{ $cat->pet_name.' '.$cat->registration ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pet_name" class="form-label">Name*</label>
                            <input class="form-control" type="text" id="pet_name" name="pet_name"
                                   value="{{old('pet_name')}}" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Color</label>
                            <div class="input-group">
                                <input type="hidden" name="color_id" id="color_id_hidden" value="">
                                <select class="form-select mb-3 " aria-label="" id="color_id" name="color_id"
                                        readonly="true">
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
                                   value="{{old('dob')}}" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="gender_id" class="form-label">Sex*</label>
                            <input type="hidden" name="gender_id" id="gender_id_hidden" value="">
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="gender_id" name="gender_id"
                                        readonly="true">
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
                            <input type="hidden" name="breed_id" id="breed_id_hidden" value="">
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="breed_id" name="breed_id"
                                        readonly="true">
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
                            <input type="hidden" name="breeder_id" value="" id="breeder_id_hidden">
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="breeder_id">
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
                                   value="{{old('microchip')}}" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="hair" class="form-label">Hair</label>
                            <input class="form-control" type="text" id="hair" name="hair" value="{{old('hair')}}"
                                   readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="sire" class="form-label">Sire</label>
                            <input class="form-control" type="text" id="sire" name="sire" value="{{old('sire')}}"
                                   readonly="true">
                        </div>

                        <div class="mb-3">
                            <label for="dam" class="form-label">Dam</label>
                            <input class="form-control" type="text" id="dam" name="dam" value="{{old('dam')}}"
                                   readonly="true">
                        </div>

                        <div class="mb-3">
                            <label for="owner_name" class="form-label">Owner Name*</label>
                            <input class="form-control" type="text" id="owner_name" name="owner_name"
                                   value="{{old('owner_name')}}" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Show Class*</label>
                            <input class="form-control" type="text" id="class" name="class"
                                   value="{{old('class')}}" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address*</label>
                            <input class="form-control" type="text" id="address" name="address" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact*</label>
                            <input class="form-control" type="text" id="contact" name="contact" readonly="true">
                        </div>
                        <div class="mb-3">
                            <label for="fee_amount" class="form-label">Entry Fee*</label>
                            <input class="form-control" type="text" id="fee_amount" name="fee_amount" readonly="true">
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
                                    <button type="button" onclick="history.back()" class="btn btn-danger">Cancel</button>
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

            $('#registration_no').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Cat',
                allowClear: true
            });
            // $('#event_id').select2({
            //     theme: 'bootstrap4',
            //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            //     placeholder: 'Select Event',
            //     allowClear: true
            // });

            $('#breed_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breed',
                allowClear: true,
                disabled: true,
            });

            $('#breeder_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breeder',
                allowClear: true,
                disabled: true,
            });

            $('#gender_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Gender',
                allowClear: true,
                disabled: true,
            });
            // $('#class').select2({
            //     theme: 'bootstrap4',
            //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            //     placeholder: 'Select Class',
            //     allowClear: true
            // });
            $('#color_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Color',
                allowClear: true,
                disabled: true,
            });

            // $('#event_id').change(function () {
            //     resetEventChange();
            // });

            //Ajax Call to Prefill
            $('#registration_no').change(function () {
                var registration_no = $('#registration_no').find(":selected").val();
                // var event_id = $('#event_id').find(":selected").val();
                var event_id = $('#event_id').val();
                $.ajax({
                    url: '{{ route('user.event.entry.prefill') }}',
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

                                    $('#' + key + '_hidden').val(value)
                                    $('#' + key + '_hidden').trigger('change');
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

        function resetEventChange() {
            $('#entry_form').trigger("reset");
            // $("#registration_no").select2("val", "");
        }

        function catChange() {

        }
    </script>
@endsection
