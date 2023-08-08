@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('admin.cat.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Show property</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                @if(Session::has('warning'))
                    <div class="alert alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 text-warning"><ion-icon name="warning-sharp"></ion-icon>
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
                            <div class="fs-3 text-white"><ion-icon name="checkmark-circle-sharp"></ion-icon>
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
                            <div class="fs-3 text-white"><ion-icon name="close-circle-sharp"></ion-icon>
                            </div>
                            <div class="ms-3">
                                <div class="text-white">{{Session::get('error')}}!</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table mb-0 table-striped">
                    <tr>
                        <th scope="col">Pet pic</th>
                        <td><img style="width: 100px" src="{{asset('storage/cats/'.$cat->pet_pic)}}"></td>
                    </tr>
                    <tr>
                        <th scope="col">Pet Name</th>
                        <td>{{$cat->pet_name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Status</th>
                        <td>@if($cat->status == 1) Active @else Inactive @endif </td>
                    </tr>
                    <tr>
                        <th scope="col">Whelped</th>
                        <td>{{customDate($cat->whelped,'d F Y') ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Foreign No</th>
                        <td>{{$cat->foreign_no ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Registration </th>
                        <td>{{$cat->registration ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breeder ID</th>
                        <td>{{$cat->breeder->name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Gender ID</th>
                        <td>{{$cat->gender->gender_value ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breed ID</th>
                        <td>{{$cat->breed->breed_value ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Owner ID</th>
                        <td>{{$cat->owner->name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Color ID</th>
                        <td>{{$cat->color->color_value ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Father</th>
                        <td>{{$cat->petFather->pet_name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mother</th>
                        <td>{{$cat->petMother->pet_name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Microchip</th>
                        <td>{{$cat->microchip ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Title</th>
                        <td>{{$cat->award ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Suspend</th>
                        <td>
                            @if($cat->suspend == 1)
                            Suspended
                            @else
                            Not Suspended
                            @endif
                        </td>
                    </tr>
                    @if($cat->owner_id != null )
                    <tr>
                        
                        <th scope="col">Deduct Export Pedigree Fee</th>
                        <td><a href="{{route('admin.cat.deduct.export.fee',$cat->owner_id)}}?cat={{$cat->registration}}&slug={{$cat->seo_slug}}" class="btn btn-outline-primary">Export Pedigree Fee</a></td>
                    </tr>
                    <tr>
                        <th scope="col">Deduct Duplicate Pedigree Fee</th>
                        <td><a href="{{route('admin.cat.deduct.duplicate.fee',$cat->owner_id)}}?cat={{$cat->registration}}&slug={{$cat->seo_slug}}" class="btn btn-outline-primary">Duplicate Pedigree Fee</a></td>
                    </tr>
                    @endif



                </table>
            </div>

        </div>
         <!-- Bottom Buttons -->
         <div class="mb-3"></div>
                <div class="row">
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Back to List</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-grid">
                            <a href="{{route('admin.cat.cat_print_front',$cat->id)}}" class="btn btn-primary">Print Front</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-grid">
                            @if( $cat->qr_code != null)
                            <a href="{{route('admin.cat.cat_print_back',$cat->id)}}" class="btn btn-primary">Print Back</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-grid">
                            <a href="{{route('admin.cat.cat_print_front.export',[$cat->id,'export'])}}" class="btn btn-primary">Print Front Export</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-grid">
                            @if( $cat->qr_code != null)
                                <a href="{{route('admin.cat.cat_print_back.export',[$cat->id,'export'])}}" class="btn btn-primary">Print Back Export</a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mt-2">
                            <div class="d-grid">
                                @if( $cat->qr_code != null && $cat->award != null && str_contains($cat->award,'CH'))
                                    <a href="{{route('admin.cat.champion.certificate',$cat->id)}}" class="btn btn-primary">Print Champion Certificate</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
