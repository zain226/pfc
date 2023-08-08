@extends('admin.layouts.app')
@section('title','Stud Detail Record')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('admin.stud_certificate.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Stud Detail Record</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Breed</th>
                        <td>{{$certificate->studBreed->breed_value ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Name Of Sire - PKC No</th>
                        <td>{{$certificate->sire->pet_name ?? ''}} - {{$csrtificate->sire->registration ?? ''}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Name Of Dam - PKC No</th>
                        <td>{{$certificate->dam->pet_name ?? ''}} - {{$csrtificate->dam->registration ?? ''}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Sire Owner ID</th>
                        <td>{{$certificate->sireOwner->name ?? ''}} - {{$csrtificate->sireOwner->kennel ?? ''}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Dam Owner ID</th>
                        <td>{{$certificate->damOwner->name ?? ''}} - {{$csrtificate->damOwner->kennel ?? ''}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Mating date</th>
                        <td>{{ date('d M Y',strtotime($certificate->mating_date)) ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date time</th>
                        <td>{{$certificate->created_at->format('d M Y h:i:s') ?? ''}}</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <a href="{{route('admin.stud_certificate.index')}}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
