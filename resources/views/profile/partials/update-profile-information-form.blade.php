<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('اطلاعات حساب کاربری شما') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("اطلاعات نمایه و آدرس ایمیل حساب خود را به روز کنید") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('نام')" />
            <x-text-input id="name" name="name" type="text" class="auth-auto" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('ایمیل')" />
            <x-text-input id="email" name="email" type="email" class="auth-auto" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('آدرس ایمیل شما تایید نشده است') }}

                        <button form="send-verification" class="auth-auto">
                            {{ __('ارسال مجدد ایمیل') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('ایمیل حاوی لینک تایید برای شما ارسال شد') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div style="margin:auto;">
            <x-primary-button style="margin-top:10px;"  class="auth-auto">{{ __('تایید') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('ذخیره شد') }}</p>
            @endif
        </div>
    </form>
</section>
