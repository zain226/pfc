@extends('frontend.layouts.app')
@section('title','Entries Registration')
@section('content')
    <div class="page-content">
        @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/EVENTS.png'),'breedcrumb'=>'Entries Registration','page_title'=>'Apply Online For Entries Registration' , 'overlay' => 'none'])
        <div class="section-full content-inner contact-style-1">
            <div class="container">
                <div class="row">
                    <!--Left Start Rigestrartion form  -->
                    <div class="col-lg-7">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            <h2>Apply Online For Show Entries</h2>
                            <div class="dzFormMsg"></div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form method="post" action="{{route('login')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" required class="form-control"
                                                       placeholder="Your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="password" type="password" class="form-control" required placeholder="Your Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" value="Submit" class="site-button radius-sm ">
                                            <span>Send</span></button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <!-- Left End Rigestrartion form -->
                    <!-- right part start -->
                    <div class="col-lg-5">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                            <div class="mb-3"></div>
                            <h2 class="m-b10">For Guest Participant</h2>
                            <p><b>Mobile:</b> <a href="tel:+923200200200">+92 320 0200200</a></p>
                            <p><b>Phone:</b> <a href="tel:04235248212">042 35248212</a></p>
                            </p>
                            <div class="mb-5"></div>
                        </div> 
                    </div>
                    <!-- right part END -->

                </div>
            </div>
        </div>
    </div>
@endsection
