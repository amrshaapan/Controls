@extends('user.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email"
                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password"
                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if(Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}








{{-- <div class="signpanel-wrapper">
    <div class="signbox" style="margin-left: 244px;margin-top:-250px">
        <div class="signbox-header">
            <h4>شاشة الدخول</h4>
            {{-- <p class="mg-b-0">Responsive Bootstrap 4 Admin Template</p> 
        </div>
        <div class="signbox-body">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-control-label">اسم المستخدم:</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <label class="form-control-label">كلمة المرور:</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <a href="#">Forgot password?</a>
                </div><!-- form-group -->
                <button class="btn btn-dark btn-block">سجل دخول</button>
                <div class="tx-center bd pd-10 mg-t-40">Not yet a member? <a href="page-signup.html">Create an
                        account</a></div>

            </form>
        </div><!-- signbox-body -->
    </div><!-- signbox -->
</div> --}}




<div class="login">



<div class="logo"> 
    <img src="{{asset('front-end/assets/img/logo.png')}}" alt="logo" />
     <strong>ME</strong>LON </div>
    <div class="box">
        <div class="content">
            <form class="form-vertical login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="form-title">Sign In to your Account</h3>
                
                <div class="form-group">
                    <div class="input-icon"> 
                        <i class="icon-user"></i>
                         <input type="text" name="email" class="form-control" placeholder="Username" /> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon"> 
                        <i class="icon-lock"></i> 
                        <input type="password" name="password" class="form-control" placeholder="Password" /> 
                    </div>
                </div>

                <div class="form-actions"> <label class="checkbox pull-left"><input type="checkbox" class="uniform"
                            name="remember"> Remember me</label> <button type="submit"
                        class="submit btn btn-primary pull-right"> Sign In <i class="icon-angle-right"></i> </button>
                </div>
            </form>

        </div>
     
    </div>
</div>
@endsection
