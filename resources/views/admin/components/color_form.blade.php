<div class="color_errors"></div>
<div class="color_message"></div>
<form method="post" action="{{route('admin.color-management.store')}}" class="color_form">
    @csrf
    <div class="mb-3">
        <label for="colorName" class="form-label">Color value</label>
        <input class="form-control" type="text" id="colorName" name="color_value" value="{{old('color_value')}}">
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
