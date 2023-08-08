@php($breed = $request->breedId ?? null)
  @if($breed)
 @php($currentClass = null)
                                    <ul class="nav nav-tabs">
                                        @foreach(getClasses() as $k => $class_name)
                                        @if(in_array($class_name,$available_classes))
                                        @php($currentClass = $currentClass == null ? $class_name : $currentClass)
                                        <li class="nav-item mb-2"><a class="nav-link @if($loop->index == 0) active @endif " data-toggle="tab"
                                                href="#{{getSlug($class_name)}}"><span class="title-head">{{$class_name ?? ''}}</span></a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                   
                                    <div class="tab-content">
                                        @foreach($entries as $entryKey => $entry_by_class)
                                        @php($active = $currentClass == $entryKey ? 'active' : '')
                                        <div id="{{getSlug($entryKey)}}" class="tab-pane {{$active}}">
                                            <h4 class="m-b30">{{$entryKey ?? ''}}</h4>
                                            <!--Table -->
                                            <div class="dez-card table-responsive">
                                                <!-- <div class="dez-head-bx skew-triangle right-top m-a-out">
                                                    <h3 class="text-white m-a0">Match Overview</h3>
                                                </div> -->
                                                <table class="table table-bordered  border-dark text-black">
                                                    <thead>
                                                        <tr
                                                            class="table-headding bg-primary border-light text-white text-center">
                                                            <th>Grading</th>
                                                            <th>Rank</th>
                                                            <th>Name Of Cat</th>
                                                            <th>Award</th>
                                                            <th>Class</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                        
                                                    @foreach($entry_by_class as $valueInd)
                                                      
                                                        <tr>
                                                            <td>
                                                                <p class="revert">
                                                                    {{$valueInd->title->title ?? '-'}}
                                                                 </p>
                                                            </td>
                                                            <td>
                                                                <p class="revert">
                                                                    {{$valueInd->position}}
                                                                 </p>
                                                            </td>
                                                            <td>
                                                                <u><a href="{{route('pedigree',getSlug($valueInd->pet_name))}}" target="_blank">{{$valueInd->pet_name}}</a></u><br>
                                                                <p>
                                                                    {{$valueInd->registration_no ?? 'N/A'}} | {{date('F d, Y',strtotime($valueInd->dob))}}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                {{getAwardList($valueInd)?? ''}}
                                                            </td>
                                                            <td>
                                                                {{$valueInd->class ?? ''}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- End Table -->
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif