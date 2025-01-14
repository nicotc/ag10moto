@extends('layouts.auth.base')

@section('content')
<h4 class="mb-2">Forgot Password? 🔒</h4>
<p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="auth-reset-password-cover.html" method="GET" novalidate="novalidate">
                <div class="mb-3 fv-plugins-icon-container">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" autofocus="">
                  @if($errors->has('email'))
                  <span class="danger">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
              <input type="hidden"></form>
        </form>
        <div class="text-center">
            <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
              Back to login
            </a>
          </div>

@endsection
