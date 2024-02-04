<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('تغییر پسورد') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('اطمینان حاصل کنید که حساب شما از یک رمز عبور طولانی و تصادفی برای حفظ امنیت استفاده می کند') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('پسورد قبلی')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="auth-auto" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('پسورد جدید')" />
            <x-text-input id="update_password_password" name="password" type="password" class="auth-auto" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('تکرار پسورد جدید')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="auth-auto" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="margin-top:10px;"  class="auth-auto">{{ __('تایید') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="auth-auto"
                >{{ __('ذخیره شد') }}</p>
            @endif
        </div>
    </form>
</section>
