@extends('frontend.layouts.auth')
@section('title','Forgot Password')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/toastr/toastr.min.css')}}">
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content dez-login p-t50 p-lr15 overlay-black-dark bg-img-fix nav" style="background-image:url({{asset('frontend/images/background/bg3.jpg')}});">
        <div class="login-form relative z-index3 ">
            <div class="tab-content">
                <div id="forgot-password" class="tab-pane active">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" class="p-a25 dez-form m-t100 text-center">
                        @csrf
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input name="email" required="" class="form-control" placeholder="Email Id" type="email"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" href="{{route('login')}}">Back</a>
                            <button type="submit" class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
@section('scripts')
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
