@extends('admin.layouts.app')
@section('title','Show Membership Application')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Membership Application' => route('admin.membership_application.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Show Membership Application</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">First Name</th>
                        <td>Kashif Mahmood</td>
                    </tr>
                    <tr>
                        <th scope="col">Last Name</th>
                        <td>M_SQRTPI</td>
                    </tr>
                    <tr>
                        <th scope="col">Kennel Name</th>
                        <td>Sibrisky Khaski (Husky) Kennel Club Wah</td>
                    </tr>
                    <tr>
                        <th scope="col">CNIC</th>
                        <td>37406-1642462-1</td>
                    </tr>
                    <tr>
                        <th scope="col">Picture</th>
                        <td>kmm.jpg</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td>mirkashifm@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th>
                        <td>+92-323-411-1444</td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th>
                        <td>Mir Mansions, Villa Number A 84, Lane No 02, Lala Rukh, Opposite Al Elaj Hospistal, Wah Cantt</td>
                    </tr>
                    <tr>
                        <th scope="col">City</th>
                        <td>Wah</td>
                    </tr>
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
                            <button type="submit" class="btn btn-primary">Print Front</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Print Back</button>
                        </div>
                    </div>
                </div>
            <!-- End Bottom Buttons -->
    </div>
</div>
@endsection
