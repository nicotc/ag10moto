@extends('layouts.auth.base')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter your email or username"
            autofocus />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
                id="password"
                class="form-control"
                type="password"
                name="password"
                required
                autocomplete="current-password" />
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
            </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <button class="btn btn-primary d-grid w-100">Log in</button>
        </div>
    </form>
    <p class="text-center">
        <span>New on our platform?</span>
        <a href="{{ route('register') }}">
        <span>Create an account</span>
        </a>
    </p>
@endsection
