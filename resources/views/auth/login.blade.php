@extends('layout')

@section('content')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me" class="checkboxContainer">
                    <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                    <span class="checkmark">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="forgotPassword">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div>
                <x-button class="authenticationButton">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
@endsection
