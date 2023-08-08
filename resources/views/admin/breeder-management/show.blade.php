@extends('admin.layouts.app')
@section('title','Breeder Detail')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Breeder Management' =>
        route('admin.breeder-management.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Show property</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Breeder Name</th>
                        <td>{{$breeder->name ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Contact</th>
                        <td>{{$breeder->contact ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th>
                        <td>{{$breeder->address ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">City</th>
                        <td>{{$breeder->city ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Kennel</th>
                        <td>{{$breeder->kennel ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Picture</th>
                        <td><img style="width: 100px" src="{{asset('storage/breeders/'.$breeder->pic)}}"></td>
                    </tr>
                    <tr>
                        <th scope="col">Breeder Email</th>
                        <td>{{$breeder->email ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Breeder Password</th>
                        <td>{{$breeder->password ?? '-'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Registration Breeder</th>
                        <td>{{$breeder->registration_no ?? '-'}}</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.breeder-management.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
            <div class="col-4">
                <div class="d-grid">
                    <a href="{{route('admin.breeder-management.print_kennel_card',$breeder->id)}}" class="btn btn-primary">Print Kennel Card</a>
                </div>
            </div>
{{--            <div class="col-2">--}}
{{--                <div class="d-grid">--}}
{{--                    <button type="submit" class="btn btn-primary">Print Back</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
