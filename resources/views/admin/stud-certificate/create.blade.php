@extends('admin.layouts.app')
@section('title','Create Stud Certificate')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
            route('admin.stud_certificate.index'), 'Create Stud Certificate' =>
            'javascript:void(0);']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Create Stud Certificate</h6>
                </div>
                <div class="card-body">
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    @if(Session::has('warning'))
                        <div class="alert alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="fs-3 text-warning">
                                    <ion-icon name="warning-sharp"></ion-icon>
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
                                <div class="fs-3 text-white">
                                    <ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                    <form method="post" action="{{route('admin.stud_certificate.store')}}">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" id="sire_owner_id" name="sire_owner_id" value="{{$owner_id ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="stud-breed" class="form-label">Breed</label>
                            <input name="breed_id" value="" id="breed_id" type="hidden" class="form-control">
                            <input value="" id="breed-id" type="text" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="sire-pkc-no" class="form-label">Name Of Sire - PKC No</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="sire_id" name="sire_id">
                                <option selected="">Select Name Of Sire - PKC No</option>
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id ?? ''}}"
                                            data-owner="{{$cat->owner_id ?? ''}}">{{$cat->pet_name ?? ''}}
                                        - {{$cat->registration ?? ''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dam-pkc-no" class="form-label">Name Of Dam - PKC No</label>
                            <select class="form-select mb-3 single-select" aria-label="" id="dame_id" disabled
                                    name="dame_id">
                                <option selected="">Name Of Dam - PKC No</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="dam-owner-id" class="form-label">Dam Owner ID</label>
                            <input type="hidden" value="" name="dame_owner_id" id="dame_owner_id">
                            <input type="text" disabled value="" class="form-control" id="dame-owner-id">
                        </div>
                        <div class="mb-3">
                            <label for="mating-date" class="form-label">Mating Date</label>
                            <input type="date" class="form-control" name="mating_date" id="mating-date"
                                   value="{{old('mating_date')}}">
                        </div>


                        <!-- Bottom Button -->
                        <div class="mb-3"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(document).ready(function () {

            $('#sire_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Stud',
                allowClear: true
            });

            $('#dame_id').prop("disabled", true);
            $('#breed-id').prop("disabled", true);
            $('#dame-owner-id').prop("disabled", true);
            $('#dame-owner-id').val('');
            $('#dame_owner_id').val('');
            $('#breed_id').val('');
            $('#breed-id').val('');
        })

        $('#sire_id').change(function () {
            var owner_id = $(this).find(':selected').data('owner');
            $('#sire_owner_id').val(owner_id);
            var token = "{{ csrf_token() }}";
            var data = {
                '_token': token,
                'stud_id': $(this).val()
            };
            $.ajax({
                type: "POST",
                url: "{{route('admin.stud_certificate.get_dames')}}",
                data: data,
                // async: false,
                success: function (response) {
                    // var array = string.filter(function(e){return e;});
                    var select = $('#dame_id');
                    $('#breed_id').val(response.breed_id);
                    $('#breed-id').val(response.breed);
                    select.empty();
                    $('#dame-owner-id').val('');
                    $('#dame_owner_id').val('');
                    select.append(
                        $('<option></option>').val('').html('Name of Dame - PKC No')
                    );
                    $.each(response.dames, function (index, value) {
                        select.append(
                            $('<option></option>').val(value.id).html(value.pet_name + '-' + value.registration)
                        );
                    });
                    $('#dame_id').prop("disabled", false);
                },
                error: function () {
                    alert('Error occured');
                }
            });
        });

        $('#dame_id').change(function () {
            var token = "{{ csrf_token() }}";
            var data = {
                '_token': token,
                'dame_id': $(this).val()
            };
            $.ajax({
                type: "POST",
                url: "{{route('admin.stud_certificate.get_dame_owner')}}",
                data: data,
                // async: false,
                success: function (response) {
                    // var array = string.filter(function(e){return e;});
                    $('#dame-owner-id').val(response.owner);
                    $('#dame_owner_id').val(response.owner_id);
                },
                error: function () {
                    alert('Error occured');
                }
            });
        });


    </script>
@endsection
