@extends('layouts.master')

@section('body')

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


@endsection