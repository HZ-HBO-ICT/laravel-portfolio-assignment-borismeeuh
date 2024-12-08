@extends('layout')

@section('content')
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="input" type="text" name="name" :value="old('name') "  required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="input" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="input"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="input"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="forgotPassword">
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <div>
                <x-button class="authenticationButton">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
@endsection
