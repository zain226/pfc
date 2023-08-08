<form method="post" class="breeder_form" action="{{route('admin.breeder-management.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label for="breeder_name" class="form-label">Breeder Name</label>
            <input class="form-control" type="text" id="breeder_name" name="name">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact </label>
            <input class="form-control" type="text" id="contact" name="contact">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input class="form-control" type="text" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input class="form-control" type="text" id="petName" name="city">
        </div>
        <div class="mb-3">
            <label for="kennel" class="form-label">Kennel</label>
            <input class="form-control" type="text" id="petName" name="kennel">
        </div>
        <div class="mb-3">
            <label for="breeder_pic" class="form-label">Picture</label>
            <input class="form-control dropify" type="file" id="breeder_pic" name="pic">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="breeder-password" class="form-label">Breeder Password</label>
            <input class="form-control" type="password" id="breeder-password" name="password">
        </div>
        <div class="mb-3">
            <label for="registration-breeder" class="form-label">Registration Breeder</label>
            <input class="form-control" type="text" id="registration-breeder" name="registration_no">
        </div>
        <div class="mb-3"></div>
        <div class="mb-3">
            <label for="permanent_member" class="form-label">Permanent member</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="permanent_member" id="permanent_member" value="1">
            <label class="form-check-label" for="inlineRadio1">Active</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="permanent_member" id="inactive-status" value="0" checked>
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
        </div>
        <div class="mb-3"></div>
        <div class="mb-3">
            <label for="status" class="form-label">Suspend</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="suspended" id="active-status" value="1">
            <label class="form-check-label" for="inlineRadio1">Active</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="suspended" id="inactive-status" value="0" checked>
            <label class="form-check-label" for="inlineRadio2">Inactive</label>
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
        <!-- End Bottom Button -->


    </div>
</form>
<div class="breeder_errors"></div>
<div class="breeder_message"></div>
