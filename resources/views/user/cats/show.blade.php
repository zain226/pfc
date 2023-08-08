@extends('user.layouts.app')
@section('title','Dashboard')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        @include('user.components.breadcrumb',['breadcrumbs'=> ['Cats' => route('user.cat.index'), 'Show' => '']])
        <h6 class="mb-0 text-uppercase">Show property</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th scope="col">Pet pic</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">QR code</th>
                        <td>75e69-hazel.png
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Pet Name</th>
                        <td>Hazel PK13059</td>
                    </tr>
                    <tr>
                        <th scope="col">Status</th>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <th scope="col">Whelped</th>
                        <td>2022-03-05</td>
                    </tr>
                    <tr>
                        <th scope="col">Foreign No</th>
                        <td>ABCXYZ</td>
                    </tr>
                    <tr>
                        <th scope="col">Date of Death</th>
                        <td>2022-03-05</td>
                    </tr>
                    <tr>
                        <th scope="col">Registration </th>
                        <td>PK 13059</td>
                    </tr>
                    <tr>
                        <th scope="col">Breeder ID</th>
                        <td>No Information</td>
                    </tr>
                    <tr>
                        <th scope="col">Gender ID</th>
                        <td>Female</td>
                    </tr>
                    <tr>
                        <th scope="col">Breed ID</th>
                        <td>German Shepherd Cat</td>
                    </tr>
                    <tr>
                        <th scope="col">Owner ID</th>
                        <td>Asfand Ali</td>
                    </tr>
                    <tr>
                        <th scope="col">Color ID</th>
                        <td>Black & Tan</td>
                    </tr>
                    <tr>
                        <th scope="col">Color ID</th>
                        <td>Black & Tan</td>
                    </tr>
                    <tr>
                        <th scope="col">Pattern ID</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">Father</th>
                        <td>No Information</td>
                    </tr>
                    <tr>
                        <th scope="col">Mother</th>
                        <td>No Information</td>
                    </tr>
                    <tr>
                        <th scope="col">Post ID</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">Microchip</th>
                        <td>900215005518516</td>
                    </tr>
                    <tr>
                        <th scope="col">Title</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">Breed survey</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">Breeder surveyor</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">Suspend</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="col">0000-00-00</th>
                        <td>-</td>
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
