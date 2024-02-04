@extends('layouts.master')

@section('style')
    <link href="css/style-login.css" rel="stylesheet" />
    <link href="css/style-sell.css" rel="stylesheet" />
@endsection

@section('body')

@include('profile.user.menu')


    <div class="form-login">
        <div class="">
            <div class="">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div style="width:70%;display:flex;text-align: center;margin: 2vw auto;justify-content: center;align-items: baseline;">
                <div>
                    <svg height="5" width="100%">
                        <line x1="0" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
                    </svg>
                </div>
                <div style="min-width: fit-content;">
                    تغییر پسورد
                </div>
                <div>
                    <svg height="5" width="100%">
                        <line x1="0" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
                    </svg>
                </div>
            </div>

            <div class="">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div style="width:70%;display:flex;text-align: center;margin: 2vw auto;justify-content: center;align-items: baseline;">
                <div>
                    <svg height="5" width="100%">
                        <line x1="0" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
                    </svg>
                </div>
                <div style="min-width: fit-content;">
                    حذف اکانت
                </div>
                <div>
                    <svg height="5" width="100%">
                        <line x1="0" y1="0" x2="100%" y2="0" style="stroke: #ffffff;stroke-width: 1;"></line>
                    </svg>
                </div>
            </div>

            <div class="">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

@endsection
