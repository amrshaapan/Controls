@extends('layouts.admin')

@section('content')
<div class="content">
    <!-- BEGIN LOGIN FORM -->
<form method="post" action="{{ route('admin.login.submit') }}">
    @csrf
<h3 class="form-title"> تسجيل الدخول</h3>

<div class="form-group">
<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
<label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
<div class="input-icon">
    <i class="fa fa-user"></i>
    {{-- <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="البريد الالكتروني" value="admin@admin.com" name="email" required="" autofocus=""> --}}


    <input id="email" type="email" class="form-control placeholder-no-fix @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
</div>
</div>

<div class="form-group">
<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
<label class="control-label visible-ie8 visible-ie9">كلمه المرور</label>
<div class="input-icon">
    <i class="fa fa-key"></i>
    {{-- <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمه المرور" value="123456" name="password" required=""> --}}

    <input id="password" type="password" class="form-control placeholder-no-fix @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>

<div class="form-actions">
<label class="rememberme mt-checkbox mt-checkbox-outline">
    <input type="checkbox" name="remember"> تذكر حسابي
    <span></span>
</label>
<button type="submit" class="btn green pull-right"> دخول </button>
</div>

<div class="forget-password">
<h4>هل نسيت كلمة المرور ؟</h4>
<p>يمكنك إستعادتها  <a href="https://bcmssystem.com/spasys/reset-password" title="إستعادة كلمة المرور"> <strong>إضغط هنا </strong> </a> لإنشاء كلمة مرور جدبدة. </p>
</div>
</form>
<!-- END LOGIN FORM -->
</div>
















    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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

                                    @if (Route::has('password.request'))
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
@endsection