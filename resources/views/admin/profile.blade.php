@extends('admin.layouts.app')
@section('title','Profile')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        @include('admin.components.breadcrumb',['breadcrumbs'=> ['Profile' =>
        route('admin.dashboard'), '' =>
        '']])
        <!--end breadcrumb-->
        <!-- Start Content -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="card radius-10">
                <div class="card-body">
                  <form>
                  <h5 class="mb-3">Edit Profile</h5>
                  <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                    <div class="user-change-photo shadow">
                      <img src="https://via.placeholder.com/110X110/212529/fff" alt="...">
                    </div>
                    <button type="button" class="btn btn-outline-dark btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
                  </div>
                  <h5 class="mb-0 mt-4">User Information</h5>
                  <hr>
                  <div class="row g-3">
                    <div class="col-6">
                       <label class="form-label">Username</label>
                       <input type="text" class="form-control" value="@jhon">
                    </div>
                    <div class="col-6">
                     <label class="form-label">Email address</label>
                     <input type="text" class="form-control" value="xyz@example.com">
                   </div>
                     <div class="col-6">
                       <label class="form-label">First Name</label>
                       <input type="text" class="form-control" value="jhon">
                   </div>
                   <div class="col-6">
                       <label class="form-label">Last Name</label>
                       <input type="text" class="form-control" value="">
                   </div>
                 </div>
    
                 <h5 class="mb-0 mt-4">Contact Information</h5>
                 <hr>
                 <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="47-A, city name, United States">
                   </div>
                   <div class="col-6">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" value="@jhon">
                   </div>
                   <div class="col-6">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" value="xyz@example.com">
                  </div>
                    <div class="col-6">
                      <label class="form-label">Pin Code</label>
                      <input type="text" class="form-control" value="jhon">
                  </div>
                  <div class="col-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" value="Deo">
                  </div>
                  <div class="col-12">
                    <label class="form-label">About Me</label>
                    <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..."></textarea>
                   </div>
                  </div>
                  <div class="text-start mt-3">
                    <button type="button" class="btn btn-dark px-4">Save Changes</button>
                  </div>
                </div>
               </form>
              </div>
            </div>
          </div>
        <!-- End Content -->
        

    </div>
</div>
@endsection
