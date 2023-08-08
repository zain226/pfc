@extends('frontend.layouts.app')
@section('title','Show Fancier Application')
@section('content')
    <div class="page-content">
           @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/membership.png'),'breedcrumb'=>'Membership Application','page_title'=>'Show Fancier Application' , 'overlay' => 'none'])
        <div class="section-full content-inner contact-style-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="m-b0">
                        <h2 class="text-uppercase">Online Show Fancier Application</h2>
                        <p>By filling out this online form, I agree to be bound by PKC. Rules and Bye-laws as may be
                            amended
                            and in force, from time to time. I hereby acknowledge the jurisdiction of the committee of
                            the
                            PKC on all questions or disputes or complaints or reports of any kind whatsoever, arising in
                            respect of club related activities, and I hereby expressly agree that the decision of the
                            Committee upon any question or dispute or complaint or report shall be final and binding on
                            me.
                            I further declare that I am not suspended or disqualified by the Pakistan Feline Club or any
                            affiliate bodies of the Pakistan Feline Club, IKU.
                        </p>
                        <div class="dez-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="p-tb30" style="width:70%;">
                                <button class="site-button red radius-xl  m-r15 text-uppercase" type="button"
                                        onclick="history.back();">Go
                                    Back
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="p-tb30">
                                <h1 class="text-uppercase">PKC Membership Form</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dez-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>

                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-6">
                        <div class="dzFormMsg"></div>
                        <form method="post" action="{{route('membership-application.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="full member" name="type">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="full_name" type="text" class="form-control"
                                                   placeholder="Full Name" value="{{old('full_name')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="cnic" type="tel" class="form-control"
                                                   placeholder="CNIC" value="{{old('cnic')}}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control"
                                                   placeholder="Email" value="{{old('email')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phone" type="tel" class="form-control"
                                                   placeholder="923xxxxxxxxx" value="{{old('phone')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="city" type="text" required class="form-control"
                                               placeholder="Your City" value="{{old('city')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="address" type="text" required class="form-control"
                                                   placeholder="Your Address" value="{{old('address')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Your Picture:</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="picture" type="file" class="form-control"
                                                   placeholder="Photograph">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Deposit Slip:</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="slip" type="file" class="form-control"
                                                   placeholder="Deposit Slip">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="site-button ">
                                        <span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                        <h4 class="mt-4">OR You Can Download Membership Form</h4>
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 m-b10">
                                <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                    <div class="icon-bx-sm bg-primary m-b20">
                                        <a target="_blank" href="{{'frontend/doc/MEMBERSHIP-FORM.pdf'}}"
                                           class="icon-cell">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                    <h4>Download Form</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-6">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6 m-b10">
                                    <div class="icon-bx-wraper bx-style-1 p-a30 center bg-dark">
                                        <div class="icon-content text-light">
                                            <h6 class="dez-tilte text-uppercase text-light">Membership
                                                Application Fee</h6>
                                            <h2 class="text-light">Rs 2500</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-6 m-b10">
                                    <div class="icon-bx-wraper bx-style-1 p-a30 center bg-dark">
                                        <div class="icon-content text-light">
                                            <h6 class="dez-tilte text-uppercase text-light">Annual Subscription Fee</h6>
                                            <h2 class="text-light">Rs 1500</h2>
                                            <!-- <p class="text-light font-italic">per year</p> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-6 m-b10">
                                    <div class="icon-bx-wraper bx-style-1 p-a30 center">
                                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                                            <h2 class="m-b10">Bank Account details</h2>
                                            <span><b>Account Title: Pakistanfelineclub</b></span>
                                            <p><b>Number: 02920103016732</b></p>
                                            <p><b>Bank Name and Branch: Meezan Bank Limited Haidar <br> road Branch Town
                                                    ship Lahore</b>
                                            </p>
                                        </div>
                                        <p>Once you click Submit, your membership application will be received and you
                                            will
                                            be contacted by our staff for facilitation of payment. All payments are only
                                            acceptable in the form of a Bank Draft or Pay Order, drawn on a local back
                                            and
                                            made out in favour of “PKC.“. No payments made via any other method are
                                            acceptable.

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right part END -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        function phoneMask() {
            var num = $(this).val().replace(/\D/g,'');
            $(this).val(num.substring(0,5) + '-'  + num.substring(5,12) + '-' + num.substring(12,13));
        }
        $('input[name="cnic"]').keyup(phoneMask);

    </script>
@endsection
