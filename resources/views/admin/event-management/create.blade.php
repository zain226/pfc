@extends('admin.layouts.app')
@section('title','Add Cat Event')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cat Events' =>
        route('admin.event_management.index'), 'Add Cat Events' => '']])
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
                    <h6 class="mb-0">Add Cat Event</h6>
                </div>
                <form method="post" action="{{route('admin.event_management.store')}}">
                    @csrf
                    <input type="hidden" name="go_back" value="0" id="go_back">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="event_title" class="form-label">Event Title</label>
                            <input class="form-control" type="text" id="event_title" name="title" value="{{old('title')}}">
                        </div>
                        <div class="mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input class="form-control" type="date" id="event_date" name="event_date" value="{{old('event_date')}}">
                        </div>
                        <div class="mb-3">
                            <label for="entry_closing_date" class="form-label">Entry Closing Date</label>
                            <input class="form-control" type="date" id="entry_closing_date" name="entry_closing_date" value="{{old('entry_closing_date')}}">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input class="form-control" type="text" id="city" name="city" value="{{old('city')}}">
                        </div>
                        <div class="mb-3">
                            <label for="venue" class="form-label">Event Venue</label>
                            <input class="form-control" type="text" id="venue" name="venue" value="{{old('venue')}}">
                        </div>
                        <div class="mb-3 append_judge">
                            <div class="row count_judge">
                            <div class="col-md-10">
                            <label for="judge_1" class="form-label">Judge 1</label>
                            <input class="form-control" type="text" id="judge_1" name="judges[]">
                            </div>
                            <div class="col-md-2">
                               <button class="btn btn-success add_judge add_btn" type="button" style="margin-top:28px">+</button>
                            </div>
                            </div>
                        </div>
                        <div class="mb-3 append_steward">
                            <div class="row count_steward">
                            <div class="col-md-10">
                            <label for="" class="form-label">Steward 1</label>
                            <input class="form-control" type="text" id="" name="steward[]">
                            </div>
                            <div class="col-md-2">
                               <button class="btn btn-success add_steward add_btn" type="button" style="margin-top:28px">+</button>
                            </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="color_id" class="form-label">Show Category</label>
                            <div class="input-group">
                                <select class="form-select mb-3 " aria-label="" id="show_category" name="show_category">
                                    <option></option>
                                    <option value="PKC All Breed" {{(old('show_category') == 'all breed')? 'selected' : ''}}>PKC All Breed Show</option>
                                    <option value="PKC - PGSDC GSD" {{(old('show_category') == 'all breed')? 'selected' : ''}}>PKC - PGSDC GSD Show</option>
                                    <option value="PKC - PLRC Labrador" {{(old('show_category') == 'all breed')? 'selected' : ''}}>PKC - PLRC Labrador Show</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Button -->

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
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Bottom Button -->
            </div>

    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {

            $('#show_category').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: 'Select Category',
                allowClear: true
            });

            $(document).on('click','.add_judge',function(){
                let count = $('.count_judge').length;
                count = count + 1;
                 
                let html = `<div class="row count_judge">
                            <div class="col-md-10">
                            <label for="judge_1" class="form-label">Judge ${count}</label>
                            <input class="form-control" type="text" id="judge_1" name="judges[]">
                            </div>
                            <div class="col-md-2">
                               <button type="button" class="btn btn-danger  remove_btn" style="margin-top:28px">X</button>
                            </div>
                            </div>`;

                $('.append_judge').append(html);
            })

            $(document).on('click','.add_steward',function(){
                let count = $('.count_steward').length;
                count = count + 1;
                 
                let html = `<div class="row count_steward">
                            <div class="col-md-10">
                            <label for="" class="form-label">Steward ${count}</label>
                            <input class="form-control" type="text" id="" name="steward[]">
                            </div>
                            <div class="col-md-2">
                               <button type="button" class="btn btn-danger  remove_btn" style="margin-top:28px">X</button>
                            </div>
                            </div>`;

                $('.append_steward').append(html);
            })

            $(document).on('click','.remove_btn',function(){
                $(this).closest('.row').remove();
            })

        });

        function saveAndGoBack()
        {
            $('#go_back').val(1);
        }
    </script>
@endsection
