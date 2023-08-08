@extends('admin.layouts.app')
@section('title','Update Advertisement')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            @include('admin.components.breadcrumb',['breadcrumbs'=> ['Advertisements' =>
            route('admin.sell_cat.index'), 'Update Advertisement' =>
            'javascript:void(0);']])

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Update Advertisement</h6>
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
                    <form action="{{route('admin.sell_cat.update',$id)}}" method="post">
                        @csrf
                        <input type="hidden" name="go_back" value="0" id="go_back">
                        <div class="mb-3">
                            <label for="cat_property_id" class="form-label">Name Of Cat - PKC No</label>
                            <select class="form-control form-select" id="cat_property_id" name="cat_property_id">
{{--                                <option selected="" value="{{$selling_ad->cat_property_id ?? ''}}"> Enter at Least 2 character</option>--}}
                                <option selected="" value="{{$selling_ad->cat_property_id ?? ''}}">{{$selling_ad->cat->pet_name.' - '.$selling_ad->cat->registration}}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control form-select" id="status" name="status">
                                <option value="active" {{($selling_ad->status == 'active' ? 'selected' : '')}}>Active</option>
                                <option value="inactive" {{($selling_ad->status == 'inactive' ? 'selected' : '')}}>Inactive</option>
                                
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Add Status</label>
                            <select class="form-control form-select" id="add_status" name="add_status">
                                <option value="for sale" {{($selling_ad->add_status == 'for sale' ? 'selected' : '')}}>For Sale</option>
                                <option value="sold" {{($selling_ad->add_status == 'sold' ? 'selected' : '')}}>Sold</option>
                                <option value="for stud" {{($selling_ad->add_status == 'for stud' ? 'selected' : '')}}>For Stud</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" id="title" name="title" value="{{$selling_ad->title ?? old('title')}}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control" type="number" id="price" name="price" value="{{$selling_ad->price ?? old('price')}}">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input class="form-control" type="number" id="contact" name="contact" value="{{$selling_ad->contact ?? old('contact')}}">
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="is_whatsapp" name="is_whatsapp" value="1" {{($selling_ad->is_whatsapp == 1) ? 'checked' : ''}}>
                                <label class="form-check-label" for="is_whatsapp">Is This Number have WhatsApp Account?</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Owner Comment</label>
                            <textarea class="form-control" rows="5" id="comment" name="comment">{{$selling_ad->comment ?? old('comment')}}</textarea>
                        </div>
                        <!-- Bottom Button -->
                        <div class="mb-2"></div>
                        <div class="row">
                            <div class="col-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="saveAndGoBack();">Save & Go
                                        Back
                                    </button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{route('admin.expense.index')}}" class="btn btn-danger">Cancel</a>
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
        function saveAndGoBack() {
            $('#go_back').val(1);
        }
        $(document).ready(function() {
            $("#cat_property_id").select2({
                ajax: {
                    url: "{{route('admin.cat.get_reg_cats')}}",
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            searchString: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
@endsection
