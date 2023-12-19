@extends('layouts.master')

@section('style')
    <link href="css/style-login.css" rel="stylesheet" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
@endsection

@section('body')
<!-- <x-guest-layout>  -->
    <!-- Session Status -->
    <div class="form-login">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="auth-auto">
            <div>
                <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.52391 18.8209H6.34174V9.54903L0.887695 5.4585V17.1847C0.887695 18.0901 1.62126 18.8209 2.52391 18.8209Z" fill="#4285F4"></path>
                    <path d="M19.4297 18.8209H23.2475C24.1529 18.8209 24.8837 18.0873 24.8837 17.1847V5.4585L19.4297 9.54903" fill="#34A853"></path>
                    <path d="M19.4297 2.45921V9.54947L24.8837 5.45894V3.27732C24.8837 1.25387 22.5739 0.100341 20.9568 1.31386" fill="#FBBC04"></path>
                    <path d="M6.34766 9.54924V2.45898L12.8925 7.36762L19.4374 2.45898V9.54924L12.8925 14.4579" fill="#EA4335"></path>
                    <path d="M0.886719 3.27732V5.45894L6.34076 9.54947V2.45921L4.81363 1.31386C3.19378 0.100341 0.886719 1.25387 0.886719 3.27732Z" fill="#C5221F"></path>
                </svg>
            </div>
            <div>
                <a href="auth/google" style="display:flex;">ورود با حساب گوگل</a>
            </div>
        </div>
        <div style="text-align: center;margin: 15px auto;">
            <svg height="5" width="20%">
                <line x1="0" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
            </svg>
            یا ورود به حساب با
            <svg height="5" width="20%">
                <line x1="10" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
            </svg>
        </div>
        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-login-input">
                    <label for="email">ایمیل</label>
                    <input id="email" class="auth-auto" type="email" name="email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-login-input">
                    <label for="password">پسورد</label>

                    <input id="password" class="auth-auto"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="">
                    <label for="remember_me" class="">
                        <input id="remember_me" type="checkbox" class="" name="remember">
                        <span class="">{{ __('یادآوری') }}</span>
                    </label>
                </div>

                <div class="" style="display:flex;justify-content: center;">
                    @if (Route::has('password.request'))
                        <a class="remind-pass" href="{{ route('password.request') }}">
                            {{ __('فراموشی رمز عبور') }}
                        </a>
                    @endif

                    <button class="auth-auto">
                        {{ __('ورود') }}
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
<!-- </x-guest-layout> -->
@endsection