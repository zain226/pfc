@extends('admin.layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection
@section('title','Add New Breed')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Breed Management' =>
        route('admin.breed-management.index'), 'Add Propety' => '']])

        <div class="card">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-dismissible fade show py-2 bg-danger">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
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
                        <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
                        </div>
                        <div class="ms-3">
                            <div class="text-white">{{Session::get('message')}}</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header">
                <h6 class="mb-0">Add New Breed</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.breed-management.store')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <div class="mb-3">
                        <label for="petName" class="form-label">Breed Name</label>
                        <input class="form-control" required type="text" id="petName" name="breed_value" value="{{old('breed_value')}}">
                    </div>
                    <div class="mb-3">
                        <label for="petName" class="form-label">Breed Group</label>
                        <select class="form-select mb-3" aria-label="" id="group_id" name="group_id">
                            <option></option>
                            @foreach($groups as $group)
                                <option value="{{$group->id}}" {{(old('group_id') == $group->id)? 'selected' : ''}}>{{$group->name ??  ''}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Breed Image</label>
                        <input class="form-control dropify" type="file" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="breed_standard" class="form-label">Breed Standard</label>
                        <input class="form-control dropify" type="file" id="breed_standard" name="breed_standard" data-allowed-file-extensions="pdf">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Breed Detail</label>
                        <textarea class="form-control" id="detail" name="detail">{{old('detail')}}</textarea>
                    </div>
                    <!-- Bottom Buttons -->
                    <div class="mb-3"></div>
                    <div class="row">
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go Back</button>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-grid">
                                <button type="button"  onclick="history.back();" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @endsection
@section('scripts')
    <script src="{{asset('js/dropify.min.js')}}"></script>
    <script src="{{asset('ckeditor4/ckeditor.js')}}"></script>
    <script>

        $(document).ready(function () {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });

            $('#group_id').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Group',
                allowClear: true
            });

        });
        CKEDITOR.replace( 'detail' );
        function saveAndGoBack()
        {
            $('#go_back').val(1);
        }

    </script>
@endsection
