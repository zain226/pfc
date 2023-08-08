@extends('frontend.layouts.app')
@section('title','Show Results PKC')
@section('content')
<div class="page-content">
    @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/SHOW-RESULTS.png'),'breedcrumb'=>'Show Results PKC','page_title'=>'Show Results PKC' , 'overlay' => 'none']) 
    <div class="section-full content-inner">

        <div class="container">
            <div class="m-b30">
                <div class="section-content">
                    
                    <div class="clearfix">
                        <div class="row">
                            <!-- tabs defult -->
                            <div class="col-lg-12 p-b20">
                                <h2 class="text-uppercase m-b30">{{$event->title ?? ''}} {{ucwords($event->city) ?? ''}} - {{date('Y',strtotime($event->event_date))}} Results</h2>
                                <h4 class="m-b30">Date : {{date('F d, Y',strtotime($event->event_date))}} | Venue : {{$event->venue ?? 'N/A'}}
                                     | Judge(s) : {{implode(',',json_decode($event->judges,true))}}</h4>
                                     
                                @foreach($data as $key => $award)
                                @if($award->count() > 0)
                                <div class="table_box">
                                <br>
                                <h4 class="text-uppercase  text-center">{{$key}}</h4>
                                <div class="dez-card table-responsive">
                                    <table class="table table-bordered  border-dark text-black">
                                        <thead>
                                        <tr
                                            class="table-headding bg-primary border-light text-white text-center">
                                            <th>Name Of Cat</th>
                                            @if($key != 'best_in_show')
                                            <th>Group</th>
                                            @endif
                                            <th>Breed</th>
                                            <th>Class</th>
                                            <th>Award(s)</th>
                                            <th>Owner</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach($award as  $entry)
                                        @php($class = $loop->iteration >= 5 ? 'extra_list hide' : '')
                                        <tr class="{{$class}}">
                                            <td>
                                                <u><a href="{{route('pedigree',getSlug($entry->pet_name))}}" target="_blank">{{$entry->pet_name}}</a></u><br>
                                                <p>
                                                    {{$entry->registration_no ?? 'N/A'}} | {{date('F d, Y',strtotime($entry->dob))}}
                                                </p>
                                            </td>
                                             @if($key != 'best_in_show')
                                            <td>
                                                {{ucwords($entry->breed->group->name ?? '')}}
                                            </td>
                                            @endif
                                            <td>
                                                {{ucwords($entry->breed->breed_value ?? '')}}
                                            </td>
                                            <td>
                                                {{ucwords($entry->class ?? '')}}
                                            </td>
                                            <td>
                                                {{$entry->$key ?? ''}}
                                            </td>
                                            <td>
                                                {{$entry->owner_name ?? ''}} 
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                                @if($award->count() > 5)
                                <div class="w-100 text-center">
                                 <button class="site-button show_more_btn m-auto" type="button">Show More</button>
                                 </div>
                                @endif
                                 </div>
                                @endif
                               
                                @endforeach
                                <br>
                                
                                <div class="row">
                                <div class="col-md-4 mt-2">
                                     <!--<label>Breed</label>-->
                                     <select class="single-select form-control" id="breed_select">
                                    <option value="">Select Breed</option>
                                          @foreach($breeds as $breed)
                                                <option value="{{$breed->id}}">{{$breed->breed_value}} ({{$breed->group->name ?? ''}})</option>
                                            @endforeach
                                     </select>
                                </div>
                              
                                <div class="col-md-4 mt-2">
                                     <!--<label>Class</label>-->
                                     <select class="single-select form-control" id="hair_select">
                                    <option value="">Select Hair Type</option>
                                                                                                             <option value="Stock Hair">Stock Hair</option>
                                                                                                            <option value="Long Hair">Long Hair</option>
                                                                        </select>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <button class="site-button w-100 submit_btn">Submit</button>
                                </div>
                               
                                </div>
                                <br>
                               
                                <div id="breed_select_tabs" class="dez-tabs bg-tabs ">
                                    @include('frontend.components.show_result')
                                </div>
                            </div>
                        </div>
                        <!-- tabs defult END -->
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
        $(document).ready(function() {
            // $("span[data-select2-id='5']").css('display','none');
            //
            // $(".single-select").on("change", function(e) {
            //     // console.log($('.single-select').find(':selected').val());
            //     window.location.href =  $('.single-select').find(':selected').val();
            //
            // });

            {{--$("#breed_select").select2({--}}
            {{--    ajax: {--}}
            {{--        url: "{{route('show_result')}}",--}}
            {{--        type: "get",--}}
            {{--        dataType: 'json',--}}
            {{--        delay: 250,--}}
            {{--        data: function (params) {--}}
            {{--            return {--}}
            {{--                genderId:'{{$cat->gender_id}}',--}}
            {{--                breedId:'{{$cat->breed_id}}',--}}
            {{--                searchString: params.term // search term--}}
            {{--            };--}}
            {{--        },--}}
            {{--        processResults: function (response) {--}}
            {{--            return {--}}
            {{--                results: response--}}
            {{--            };--}}
            {{--        },--}}
            {{--        cache: true--}}
            {{--    }--}}
            {{--});--}}

            $(document).on('click','.submit_btn',function(){
                var eventId = '{{$id}}';
                var breedId = $('#breed_select').val();
                var hair = $('#hair_select').val();

                var data = {
                    'eventId': eventId,
                    'breedId': breedId,
                    'hair': hair,
                };
                $.ajax({
                    type: "GET",
                    url: "{{route('show_result_json')}}",
                    data: data,
                    // async: false,
                    success: function (response) {
                        console.log(response);
                        $('#breed_select_tabs').empty();
                        $('#breed_select_tabs').append(response.breed_select_tabs);
                    },
                    error: function () {
                        alert('Error occured');
                    }
                });
            });
        });
    </script>
@endsection
