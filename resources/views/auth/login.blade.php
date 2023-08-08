@extends('frontend.layouts.auth')
@section('title','Login')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/toastr/toastr.min.css')}}">
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content dez-login p-t50 p-lr15 overlay-black-dark bg-img-fix nav" style="background-image:url({{asset('frontend/images/background/bg3.jpg')}});">
        <div class="login-form relative z-index3 ">
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form class="p-a25 dez-form p-b0 m-t100" action="{{route('login')}}" method="post">
                        @csrf
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input name="email" required="" class="form-control" placeholder="User Name" type="email"/>
                        </div>
                        <div class="form-group">
                            <input name="password" required="" id="txtPassword" class="form-control" placeholder="Type Password" type="password"/>
                            <span id="toggle_pwd" class="fa fa-fw fa-eye field_icon" style="margin-top: -24px;margin-right: 10px;cursor: pointer;z-index: 2;position: absolute;right: 25px;"></span>
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button m-r5 login-switch" type="submit">login</button>
                            <!--<label>-->
                            <!--    <input id="check1" type="checkbox" name="remember" value="1">-->
                            <!--    <label for="check1">Remember me</label>-->
                            <!--</label>-->
                            <a href="{{route('password.request')}}" class="m-l15"><i class="fa fa-unlock-alt"></i> Forgot Password</a> </div>
                    </form>
                    <div class="bg-primary p-a15 "> <a href="{{route('membership')}}" class="text-white">Create an account</a> </div>
                </div>
                <div id="forgot-password" class="tab-pane fade ">
                    <form class="p-a25 dez-form m-t100 text-center">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a25 dez-form text-center">
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Full Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Address" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="City/Town" type="text"/>
                        </div>
                        <label class="text-left m-b20">Enter your account details below: </label>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Password" type="text"/>
                        </div>
                        <div class="">
                            <input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="text"/>
                        </div>
                        <label class="m-b30">
                            <input type="checkbox"/>
                            <label>I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy </a></label>
                        </label>
                        <div class="form-group text-left "> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#txtPassword").attr("type", type);
            });
        });
    </script>
    <script src="{{asset('frontend/plugins/toastr/toastr.min.js')}}"></script>
    @if(Session::has('message'))
        <script>
            toastr.success('Success','{{Session::get('message')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            toastr.error('Error','{{Session::get('error')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if(Session::has('status'))
        <script>
            toastr.success('Success','{{Session::get('status')}}', {
                tapToDismiss: true,
                hideMethod: 'fadeOut',
                progressBar: true
            })
        </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('Error','{{$error}}', {
                    tapToDismiss: true,
                    hideMethod: 'fadeOut',
                    progressBar: true
                })
            </script>
        @endforeach
    @endif
@endsection
