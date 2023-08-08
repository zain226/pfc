@extends('user.layouts.app')
@section('title','Stud Detail Record')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Stud Certificate' =>
        route('user.stud_certificate.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Stud Detail Record</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Breed</th>
                        <td>{{$stud->studBreed->breed_value ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Name Of Sire - PKC No</th>
                        <td>{{$stud->sire->pet_name}} - {{$stud->sire->registration}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Name Of Dam - PKC No</th>
                        <td>{{$stud->dam->pet_name}} - {{$stud->dam->registration}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Dam Owner ID</th>
                        <td>{{$stud->damOwner->name ?? ''}} - {{$stud->damOwner->kennel ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mating date</th>
                        <td>{{$stud->mating_date ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Is Used</th>
                        <td>{{ ($stud->is_used == 0) ? 'No' : 'Yes'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date time</th>
                        <td>{{$stud->created_at ?? ''}}</td>
                    </tr>
                </table>
            </div>

        </div>
        <!-- Bottom Buttons -->
        <div class="mb-3"></div>
        <div class="row">
            <div class="col-2">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" onclick="history.back()">Back to List</button>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
