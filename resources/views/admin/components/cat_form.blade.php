<form action="{{route('admin.cat.store')}}" class="cat_form" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="pet_pic" class="form-label">Pet Picture</label>
            <input class="form-control dropify" type="file" name="pet_pic" data-height="100" data-default-file="">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
            <label for="qr_code" class="form-label">QR Code</label>
            <input class="form-control dropify" type="file" name="qr_code" data-height="100" data-default-file="">
        </div>

    </div>
    <div class="mb-3">
        <label for="pet_name" class="form-label">Pet Name</label>
        <input class="form-control" type="text" id="pet_name" name="pet_name" value="{{old('pet_name')}}">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="active_status" value="1">
        <label class="form-check-label" for="active_status">Active</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" id="inactive_status" value="0">
        <label class="form-check-label" for="inactive_status">Inactive</label>
    </div>
    <div class="mb-2"></div>
    <div class="mb-3">
        <label class="form-label" for="whelped">Whelped</label>
        <input type="date" class="form-control" name="whelped" value="{{old('whelped')}}">
    </div>
    <div class="mb-3">
        <label for="foreign_no" class="form-label">Foreign No</label>
        <input class="form-control" type="text" id="foreign_no" value="{{old('foreign_no')}}">
    </div>
    <div class="mb-3">
        <label for="date_of_death" class="form-label">Date of Death</label>
        <input type="date" class="form-control" id="date_of_death" name="date_of_death" value="{{old('date_of_death')}}">
    </div>
    <div class="mb-3">
        <label for="registration" class="form-label">Registration</label>
        <input class="form-control" type="text" id="registration" name="registration" value="{{old('registration')}}">
    </div>
    <div class="mb-3">
        <label for="breeder_id" class="form-label">Breeder ID</label>
        <div class="input-group">
            <select class="form-select mb-3 " aria-label="" name="cat_breeder_id" id="cat_breeder_id">
                <option></option>
                @foreach($breeders as $breeder)
                    <option value="{{$breeder->id}}" {{($breeder->id == old('breeder_id'))? 'selected' : ''}}>{{$breeder->name ?? ''}}</option>
                @endforeach
            </select>
            <button type="button" onclick="openModal('breeder_modal');" class="btn btn-sm btn-primary" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add breeder"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="gender_id" class="form-label">Gender ID</label>
        <div class="input-group">
            <select class="form-select mb-3" aria-label="" id="cat_gender_id" name="gender_id">
                <option></option>
                <option value="1" {{(old('gender_id') == 1)? 'selected' : ''}}>Male</option>
                <option value="2" {{(old('gender_id') == 2)? 'selected' : ''}}>Female</option>
            </select>
            <button type="button" onclick="openModal('gender_modal');" class="btn btn-sm btn-primary" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add gender"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="breed_id" class="form-label">Breed ID</label>
        <div class="input-group">
            <select class="breed_select mb-3 form-select" aria-label="" id="cat_breed_id" name="breed_id">
                <option></option>
                @foreach($breeds as $breed)
                    <option value="{{$breed->id}}" {{($breed->id == old('breed_id'))? 'selected' : ''}}>{{$breed->breed_value ?? ''}}</option>
                @endforeach
            </select>
            <button type="button" onclick="openModal('breed_modal');" class="btn btn-sm btn-primary" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add breed"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="owner_id" class="form-label">Owner ID</label>
        <div class="input-group">
            <select class="form-select mb-3 " aria-label="" id="cat_owner_id">
                <option></option>
                @foreach($owners as $owner)
                    <option value="{{$owner->id}}" {{($owner->id == old('owner_id'))? 'selected' : ''}}>{{$owner->name}}</option>
                @endforeach
            </select>
            <button type="button" onclick="openModal('owner_modal');" class="btn btn-sm btn-primary" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add owner"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="color_id" class="form-label">Color ID</label>
        <div class="input-group">
            <select class="form-select mb-3 " aria-label="" id="cat_color_id">
                <option></option>
                @foreach($colors as $color)
                    <option value="{{$color->id}}" {{($color->id == old('color_id'))? 'selected' : ''}}>{{$color->color_value}}</option>
                @endforeach
            </select>
            <button type="button" onclick="openModal('color_modal');" class="btn btn-sm btn-primary" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add color"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="father" class="form-label">Father ID</label>
        <div class="input-group">
            <select class="form-select mb-3 " aria-label="" id="cat_father" name="father">
                <option></option>
                @foreach($males as $male)
                    <option value="{{$male->id}}" {{($male->id == old('father'))? 'selected' : ''}}>{{$male->pet_name}}</option>
                @endforeach
            </select>
            <button type="button" class="btn btn-sm btn-primary" onclick="openModal('cat_modal');" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add cat"></ion-icon></button>
        </div>
    </div>
    <div class="mb-3">
        <label for="mother" class="form-label">Mother ID</label>
        <div class="input-group">
            <select class="form-select mb-3 " aria-label="" id="cat_mother" name="mother">
                <option></option>
                @foreach($females as $female)
                    <option value="{{$female->id}}" {{($female->id == old('mother'))? 'selected' : ''}}>{{$female->pet_name}}</option>
                @endforeach
            </select>
            <button type="button" class="btn btn-sm btn-primary" onclick="openModal('cat_modal');" style="margin-left: 15px;"><ion-icon name="add-circle-sharp" role="img" class="md hydrated" aria-label="add cat"></ion-icon></button>
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
    <div class="mb-7">
        <label class="form-label">Suspend</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="suspend" id="active_suspend" value="1" {{(1 == old('suspend'))? 'checked' : ''}}>
        <label class="form-check-label" for="active_suspend">Active</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="suspend" id="inactive_suspend" value="0" {{(0 == old('suspend'))? 'checked' : ''}}>
        <label class="form-check-label" for="inactive_suspend">Inactive</label>
    </div>
    <div class="mb-3"></div>
    <div class="row">
        <div class="col-2">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        <div class="col-2">
            <div class="d-grid">
                <button type="Reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </div>
</form>
<div class="cat_errors"></div>
<div class="cat_message"></div>
