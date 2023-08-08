<div class="gender_errors"></div>
<div class="gender_message"></div>
<form action="{{route('admin.gender-management.store')}}" method="post" class="gender_form">
    @csrf
    <div class="mb-3">
        <label for="petName" class="form-label">Gender value</label>
        <input class="form-control" type="input" id="petName" name="gender_value" value="{{old('gender_value')}}">
    </div>
    <!-- Bottom Buttons -->
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
