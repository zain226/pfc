@extends('user.layouts.app')
@section('title','Litter Registration')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('user.components.breadcrumb',['breadcrumbs'=> ['Litter Registration' =>
            route('user.litter_registration.index'), '' =>
            '']])
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Online Litter Registration </h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-3">By filling out this online form, I certify that this litter has been duly
                                inspected by a
                                Group Breed Warden of the PKC during the first week after birth.
                            </p>
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{$breeder->name ?? '-'}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$breeder->address ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Phone No</th>
                                    <td>{{$breeder->contact ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$breeder->email ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Kennel Name</th>
                                    <td>{{$breeder->kennel ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Membership No</th>
                                    <td>{{$breeder->registration_no ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Corresponding Stud Certificate</th>
                                    <td>
                                        <select class="form-select mb-3 sm" aria-label="" id="stud">
                                            @foreach($stud_certificates as $certificate)
                                                <option value="{{$certificate->id}}" data-breed-id="{{$certificate->breed_id}}" data-breed-name="{{$certificate->studBreed->breed_value}}"
                                                        data-sire-name="{{$certificate->sire->pet_name}} {{$certificate->sire->registration}}" data-dam-name="{{$certificate->dam->pet_name}} {{$certificate->dam->registration}}">
                                                    {{$certificate->sire->pet_name}} {{$certificate->sire->registration}}  -- {{$certificate->dam->pet_name}} {{$certificate->dam->registration}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Litter Parent</h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <th>Sire</th>
                                    <td id="sireName"></td>
                                </tr>
                                <tr>
                                    <th>Dam</th>
                                    <td id="damName"></td>
                                </tr>
                                <!-- <tr>
                                    <th>Corresponding Stud Certificate</th>
                                    <td>
                                        <form action="">
                                            <div class="">
                                                <select class="form-select mb-3 sm" aria-label="" id="nod">
                                                    <option selected="">Select One</option>
                                                </select>
                                            </div>
                                        </form>
                                    </td>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h6 class="mb-0 text-uppercase">Details of Litter</h6>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('user.litter_registration.store')}}">
                                @csrf
                                <table class="table mb-4">
                                    <tbody>
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
                                    <tr>
                                        <th>Breed</th>
                                        <td>
                                            <input type="hidden" name="stud_certificate_id" value="" id="stud_certificate_id">
                                            <input class="form-control" value="" name="breed_id" type="hidden" id="breed_id">
                                            <input type="text" class="form-control" value="" id="breed_name" readonly>
                                        </td>
                                        <th>Litters Whelping Date</th>
                                        <td>
                                            <form action="">
                                                <div class="text-center">
                                                    <input type="date" class="form-control" name="whelped">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="customer_records input-group">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="full_name" class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" id="full_name"
                                                               placeholder="Cat Name" name="pet_name[]" value="{{old("pet_name[]")}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="nod" class="form-label">Gender</label>
                                                    <select class="form-select mb-3" aria-label="" name="gender_id[]">
                                                        <option selected="" value="">Select Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-1">
                                                        <label for="nod" class="form-label">Hair Type</label>
                                                        <select class="form-select mb-3" aria-label="" name="hair[]">
                                                            <option selected="" value="">Select Hair</option>
                                                            <option value="Stock Hair">Stock Hair</option>
                                                            <option value="Long Stock Hair">L Stock Hair</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-1">
                                                        <label for="nod" class="form-label">Color</label>
                                                        <select class="form-select mb-3" aria-label="" name="color_id[]">
                                                            <option selected="" value="">Select One</option>
                                                            @foreach($colors as $colors)
                                                                <option value="{{$colors->id}}">{{$colors->color_value ?? ''}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-1">
                                                    <div class="mt-4">
                                                        <a class="extra-fields-customer mx-1 btn btn-dark px-2" href="javascript:void(0);">Add More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customer_records_dynamic">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Once you click Submit, this application for litter registration will be submitted
                                            and held
                                            for approval. If you already have a positive balance in your account, that
                                            balance will be
                                            used for payment. If payment is required, you will be alerted of the amount
                                            payable. All
                                            payments are only acceptable in the form of a Bank Draft or Pay Order, drawn on
                                            a local bank
                                            and made out in favour of “PKC“. No payments made via any other method are
                                            acceptable.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                                    <div class="card radius-10 bg-transparent shadow-none w-100">
                                        <div class="card-body p-0">
                                            <div class="card radius-10">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                    <h5 class="my-3">Litter Registration Fee</h5>
                                                    <h2>{{$litter_fee ?? ''}}</h2>
                                                    <p class="mb-0 mt-2">Litter</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                                    <div class="card radius-10 bg-transparent shadow-none w-100">
                                        <div class="card-body p-0">
                                            <div class="card radius-10">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                    <h5 class="my-3">Per Puppy Pedigree Fee</h5>
                                                    <h2>{{$per_puppy_pedigree_fee ?? ''}}</h2>
                                                    <p class="mb-0 mt-2">Puppy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.extra-fields-customer').click(function () {
            $('.customer_records').clone(true).removeData().appendTo(
                '.customer_records_dynamic');
            $('.customer_records_dynamic .customer_records').addClass('single remove');
            $('.single .extra-fields-customer').parent().parent().remove();
            $('.single .row').append(
                '<div class="col-md-2 pt-1"><div class="mt-4"><a class="remove-field btn-remove-customer btn btn-outline-danger px-2" href="javascript:void(0);">Remove</a></div></div>'
            );
            $('.customer_records_dynamic > .single').attr("class", "remove input-group my-2");

            // $('.customer_records_dynamic input').each(function() {
            //     var count = 0;
            //     var fieldname = $(this).attr("name");
            //     $(this).attr('name', fieldname + count);
            //     count++;
            // });

        });

        $(document).on('click', '.remove-field', function (e) {
            $(this).parent().parent().parent().parent().parent().remove();
            e.preventDefault();
        });

        $('#stud').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select Stud',
            allowClear: true
        });

        $('.gender').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: 'Select gender',
            allowClear: true
        });

        $('#stud').change(function () {
            var stud_certificate_id = $('#stud').find(":selected").val();
            var breedName = $(this).find(':selected').data('breed-name');
            var breedId = $(this).find(':selected').data('breed-id');
            var sireName = $(this).find(':selected').data('sire-name');
            var damName = $(this).find(':selected').data('dam-name');
            $('#stud_certificate_id').val(stud_certificate_id);
            $('#breed_name').val(breedName);
            $('#breed_id').val(breedId);
            console.log(sireName)
            if (sireName == undefined)
            {
                $('#sireName').html('');
            }
            $('#sireName').html(sireName);
            if (damName == undefined)
            {
                $('#damName').html('');
            }
            $('#damName').html(damName);

        });

    </script>

@endsection
