@extends('admin.layouts.app')
@section('title','Update Event Entry')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cat Event Entries' =>
            route('admin.entry.index',$eventId), 'Update Event Entry' => 'javascript:void(0);']])
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
                <div class="prefill_errors"></div>
                <div class="card-header">
                    <h6 class="mb-0">Cat Entry For {{$event->title.'  '.$event->city .' '.$event->event_date ?? ''}}</h6>
                </div>
                <form method="post" action="{{route('admin.entry.update',$id)}}">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <input type="hidden" name="event_id" value="{{$eventId}}" id="event_id">
                    <input type="hidden" name="owner_id" value="{{$entry->owner_id ?? ''}}" id="owner_id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="show_id" class="form-label">Catalog No</label>
                            <input class="form-control" type="text" id="show_id" name="show_id"
                                   value="{{$entry->show_id ?? $show_id ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="registration_no" class="form-label">Registration No</label>
                            <input class="form-control" type="text" id="registration_no" name="registration_no"
                                   value="{{$entry->registration_no ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="pet_name" class="form-label">Pet Name*</label>
                            <input class="form-control" type="text" id="pet_name" name="pet_name"
                                   value="{{$entry->pet_name ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Color</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="color_id" name="color_id">
                                    <option></option>
                                    @foreach($colors as $color)
                                        <option value="{{$color->id}}" {{($color->id == $entry->color_id)? 'selected' : ''}}>
                                            {{ $color->color_value ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">DOB*</label>
                            <input class="form-control" type="date" id="dob" name="dob"
                                   value="{{$entry->dob ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="gender_id" class="form-label">Sex*</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="gender_id" name="gender_id">
                                    <option></option>
                                    @foreach($genders as $gender)
                                        <option value="{{$gender->id}}" {{($entry->gender_id == $gender->id)? 'selected' : ''}}>{{$gender->gender_value ?? ''}}</option>
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
                                        <option value="{{$breed->id}}" {{$breed->id == ($entry->breed_id)? 'selected' : ''}}>
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
                                        <option value="{{$breeder->id}}" {{$breeder->id == ($entry->breeder_id)? 'selected' : ''}}>
                                            {{ $breeder->name ?? '' }} - {{ $breeder->registration_no ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                
                        <div class="mb-3">
                            <label for="microchip" class="form-label">Microchip</label>
                            <input class="form-control" type="text" id="microchip" name="microchip"
                                   value="{{$entry->microchip ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="hair" class="form-label">Hair</label>
                            <input class="form-control" type="text" id="hair" name="hair" value="{{$entry->hair ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="sire" class="form-label">Sire</label>
                            <input class="form-control" type="text" id="sire" name="sire" value="{{$entry->sire ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="dam" class="form-label">Dam</label>
                            <input class="form-control" type="text" id="dam" name="dam" value="{{$entry->dam ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="owner_name" class="form-label">Owner Name*</label>
                            <input class="form-control" type="text" id="owner_name" name="owner_name" value="{{$entry->owner_name ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Show Class*</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="class" name="class">
                                    <option></option>
                                    <option
                                        value="Baby Female" {{($entry->class == 'Baby Female')? 'selected' : ''}}>
                                        Baby Female
                                    </option>
                                    <option
                                        value="Baby Male" {{($entry->class == 'Baby Male')? 'selected' : ''}}>
                                        Baby Male
                                    </option>
                                    <option
                                        value="Puppy Female" {{($entry->class == 'Puppy Female')? 'selected' : ''}}>
                                        Puppy Female
                                    </option>
                                    <option
                                        value="Puppy Male" {{($entry->class == 'Puppy Male')? 'selected' : ''}}>
                                        Puppy Male
                                    </option>
                                    <option
                                        value="Junior Female" {{($entry->class == 'Junior Female')? 'selected' : ''}}>
                                        Junior Female
                                    </option>
                                    <option
                                        value="Junior Male" {{($entry->class == 'Junior Male')? 'selected' : ''}}>
                                        Junior Male
                                    </option>
                                    <option
                                        value="Youth Female" {{($entry->class == 'Youth Female')? 'selected' : ''}}>
                                        Youth Female
                                    </option>
                                    <option
                                        value="Youth Male" {{($entry->class == 'Youth Male')? 'selected' : ''}}>
                                        Youth Male
                                    </option>
                                    <option
                                        value="Open Female" {{($entry->class == 'Open Female')? 'selected' : ''}}>
                                        Open Female
                                    </option>
                                    <option
                                        value="Open Male" {{($entry->class == 'Open Male')? 'selected' : ''}}>
                                        Open Male
                                    </option>
                                    <option
                                        value="Veteran Female" {{($entry->class == 'Veteran Female')? 'selected' : ''}}>
                                        Veteran Female
                                    </option>
                                    <option
                                        value="Veteran Male" {{($entry->class == 'Veteran Male')? 'selected' : ''}}>
                                        Veteran Male
                                    </option>
                                    <option
                                        value="Champion Female" {{($entry->class == 'Champion Female')? 'selected' : ''}}>
                                        Champion Female
                                    </option>
                                    <option
                                        value="Champion Male" {{($entry->class == 'Champion Male')? 'selected' : ''}}>
                                        Champion Male
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address*</label>
                            <input class="form-control" type="text" id="address" name="address" value="{{$entry->address ?? old('address') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact*</label>
                            <input class="form-control" type="text" id="contact" name="contact" value="{{$entry->contact ?? old('contact') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="fee_amount" class="form-label">Fee Amount</label>
                            <input class="form-control" type="text" id="fee_amount" name="fee_amount" value="{{$entry->fee_amount ?? old('fee_amount') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="received_by" class="form-label">Received By</label>
                            <input class="form-control" type="text" id="received_by" name="received_by" value="{{$entry->received_by ?? old('received_by') ?? ''}}">
                        </div>
                        
                         <div class="row">
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Show</label>
                            <input class="form-control" type="text" id="" value="{{$entry->best_in_show ?? old('best_in_show') ?? ''}}" name="best_in_show">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Group</label>
                            <input class="form-control" type="text" id="" value="{{$entry->best_in_group ?? old('best_in_group') ?? ''}}" name="best_in_group">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">Best In Breed</label>
                            <input class="form-control" type="text" id="" value="{{$entry->best_in_breed ?? old('best_in_breed') ?? ''}}" name="best_in_breed">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="" class="form-label">CASIB</label>
                            <input class="form-control" type="text" id="" value="{{$entry->casib ?? old('casib') ?? ''}}" name="casib">
                        </div>
                        </div>
                        
{{--                        <div class="mb-3">--}}
{{--                            <label for="received_from" class="form-label">Received From</label>--}}
{{--                            <input class="form-control" type="text" id="received_from" name="received_from" value="{{$entry->received_from ?? old('received_from') ?? ''}}">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="grade" class="form-label">Grade</label>--}}
{{--                            <input class="form-control" type="text" id="grade" name="grade" value="{{$entry->grade ?? old('grade') ?? ''}}">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="position" class="form-label">Position</label>--}}
{{--                            <input class="form-control" type="number" id="position" name="position" min="1" value="{{$entry->position ?? old('position') ?? ''}}">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="best_in_group" class="form-label">Best in Group</label>--}}
{{--                            <input class="form-control" type="number" id="best_in_group" name="best_in_group" min="1" value="{{$entry->best_in_group ?? old('best_in_group') ?? ''}}">--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="best_in_show" class="form-label">Best in Show</label>--}}
{{--                            <input class="form-control" type="number" id="best_in_show" name="best_in_show" min="1" value="{{$entry->best_in_show ?? old('best_in_show') ?? ''}}">--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="customer_records input-group">
                                <div class="card-body append_grades">
                            @if(!$selected_titles->isEmpty())
                            
                            @foreach($selected_titles as $key => $selected_title)
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="nod" class="form-label">Grading</label>
                                                <select class="form-select mb-3" aria-label="" name="title[]">
                                                    <option value="">Select One</option>
                                                    @foreach($titles as $title)
                                                        <option value="{{$title->id}}" {{($selected_title->title_id == $title->id) ? 'selected' : ''}}>{{$title->title ?? ''}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="full_name" class="form-label">Rank</label>
                                                <input type="number" class="form-control" id="grade"
                                                       placeholder="Grade" name="grade[]" value="{{$selected_title->grade ?? ''}}">
                                            </div>
                                        </div>
                                        @if($key == 0)
                                        <div class="col-md-2 pt-1">
                                            <div class="mt-4">
                                                <a class="extra-fields-customer mx-1 btn btn-dark px-2" href="javascript:void(0);">Add More</a>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-2 pt-1"><div class="mt-4"><a class="remove-field btn-remove-customer btn btn-outline-danger px-2" href="javascript:void(0);">Remove</a></div></div>
                                        @endif
                                    </div>
                            @endforeach
                             
                            @else

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="nod" class="form-label">Grading</label>
                                                    <select class="form-select mb-3" aria-label="" name="title[]">
                                                        <option value="">Select One</option>
                                                        @foreach($titles as $title)
                                                            <option value="{{$title->id}}">{{$title->title ?? ''}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="full_name" class="form-label">Rank</label>
                                                    <input type="number" class="form-control" id="grade"
                                                           placeholder="Grade" name="grade[]" value="{{$selected_title->grade ?? ''}}">
                                                </div>
                                            </div>

                                            <div class="col-md-2 pt-1">
                                                <div class="mt-4">
                                                    <a class="extra-fields-customer mx-1 btn btn-dark px-2" href="javascript:void(0);">Add More</a>
                                                </div>
                                            </div>
                                        </div>
                                  
                            @endif
                            </div>
                            </div>
                            <div class="customer_records_dynamic">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="award" class="form-label">Award(s)</label>
                            <input class="form-control" type="text" id="best_in_show" name="award" value="{{$entry->award ?? old('award') ?? ''}}">
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Update & Go
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
            $('#show_category').val('{{$entry->show_category ?? ''}}');
            $('#show_category').trigger('change');

            $('#breed_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breed',
                allowClear: true
            });
            $('#breed_id').val('{{$entry->breed_id ?? ''}}');
            $('#breed_id').trigger('change');


            $('#breeder_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Breeder',
                allowClear: true
            });
            $('#breeder_id').val('{{$entry->breeder_id ?? ''}}');
            $('#breeder_id').trigger('change');

            $('#gender_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Gender',
                allowClear: true
            });
            $('#gender_id').val('{{$entry->gender_id ?? ''}}');
            $('#gender_id').trigger('change');

            $('#class').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Class',
                allowClear: true
            });
            $('#class').val('{{$entry->class ?? ''}}');
            $('#class').trigger('change');

            $('#color_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Color',
                allowClear: true
            });
            $('#color_id').val('{{$entry->color_id ?? ''}}');
            $('#color_id').trigger('change');

            //Ajax Call to Prefill
            $('input[name=registration_no]').change(function() {
                var registration_no = $('#registration_no').val();
                var event_id = $('#event_id').val();
                $.ajax( {
                    url: '{{ route('admin.entry.prefill') }}',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "registration_no" : registration_no,
                        "event_id" : event_id,
                    },
                    success: function(result){
                        if (result.success == 1)
                        {
                            $('.prefill_errors').empty();
                            $.each( result.data, function( key, value ) {
                                if (key != 'registration_no')
                                {
                                    $('#'+key).val(value)
                                    $('#'+key).trigger('change');
                                }

                            });
                        }
                        if (result.success == 0)
                        {
                            $('.prefill_errors').append(errorMessageHtml(result.msg));
                        }
                    },
                    error: function (data) {
                        if (data.status == 422)
                        {
                            $('.prefill_errors').empty();
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        $('.prefill_errors').append(errorMessageHtml(value));

                                    });
                                }
                            });

                        }
                    }
                } );
            });

        });

        function saveAndGoBack() {
            $('#go_back').val(1);
        }

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


        // Extra Fields Script
        $('.extra-fields-customer').click(function () {
            
            let html = `<div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="nod" class="form-label">Grading</label>
                                                    <select class="form-select mb-3" aria-label="" name="title[]">
                                                        <option value="">Select One</option>
                                                        @foreach($titles as $title)
                                                            <option value="{{$title->id}}">{{$title->title ?? ''}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="full_name" class="form-label">Rank</label>
                                                    <input type="number" class="form-control" id="grade"
                                                           placeholder="Grade" name="grade[]" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-2 pt-1"><div class="mt-4"><a class="remove-field btn-remove-customer btn btn-outline-danger px-2" href="javascript:void(0);">Remove</a></div></div>
                                        </div>`;
                                        
                                        $('.append_grades').append(html);
            // $('.customer_records').clone(true).removeData().appendTo(
            //     '.customer_records_dynamic');
            // $('.customer_records_dynamic .customer_records').addClass('single remove');
            // $('.single .extra-fields-customer').parent().parent().remove();
            // $('.single .row').append(
            //     '<div class="col-md-2 pt-1"><div class="mt-4"><a class="remove-field btn-remove-customer btn btn-outline-danger px-2" href="javascript:void(0);">Remove</a></div></div>'
            // );
            // $('.customer_records_dynamic > .single').attr("class", "remove input-group my-2");

            // $('.customer_records_dynamic input').each(function() {
            //     var count = 0;
            //     var fieldname = $(this).attr("name");
            //     $(this).attr('name', fieldname + count);
            //     count++;
            // });

        });

        $(document).on('click', '.remove-field', function (e) {
            $(this).closest('.row').remove();
            e.preventDefault();
        });
    </script>
@endsection
