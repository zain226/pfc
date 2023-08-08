<div class="breed_errors"></div>
<div class="breed_message"></div>
<form method="post" action="{{route('admin.breed-management.store')}}" class="breed_form">
    @csrf
    <div class="mb-3">
        <label for="petName" class="form-label">Breed Name</label>
        <input class="form-control" required type="text" id="petName" name="breed_value" value="{{old('breed_value')}}">
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
