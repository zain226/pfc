<form action="{{route('admin.owner_management.store')}}" class="owner_form" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="owner_name" class="form-label">Owner Name</label>
        <input class="form-control" type="text" id="owner_name" name="name">
    </div>
    <div class="mb-3">
        <label for="owner_contact" class="form-label">Owner Contact </label>
        <input class="form-control" type="text" id="owner_contact" name="contact">
    </div>
    <div class="mb-3">
        <label for="owner_address" class="form-label">Owner Address</label>
        <input class="form-control" type="text" id="owner_address" name="address">
    </div>
    <div class="mb-3">
        <label for="owner_email" class="form-label">Owner Email</label>
        <input class="form-control" type="text" id="owner_email" name="email">
    </div>

    <div class="mb-3">
        <label for="owner_kennel" class="form-label">Owner Kennel</label>
        <input class="form-control" type="text" id="owner_kennel" name="registration">
    </div>


    <div class="mb-3">
        <label for="owner_registration" class="form-label">Owner Registration </label>
        <input class="form-control" type="text" id="owner_registration">
    </div>

    <!-- Bottom Button -->
    <div class="mb-3"></div>
    <div class="row">
        <div class="col-2">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
        <div class="col-2">
            <div class="d-grid">
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </div>
</form>
<div class="owner_errors"></div>
<div class="owner_message"></div>
