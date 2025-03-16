<x-guest-layout>
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold">Restoran Girişi</h2>
        <p class="text-gray-600">Restoran hesabınıza giriş yapın</p>
    </div>

    <form method="POST" action="{{ route('restaurant.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('E-posta')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Şifre')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Beni Hatırla') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('restaurant.register') }}">
                    {{ __('Hesap oluştur') }}
                </a>
            </div>

            <div class="flex items-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-4" href="{{ route('password.request') }}">
                        {{ __('Şifremi Unuttum') }}
                    </a>
                @endif

                <x-primary-button>
                    {{ __('Giriş Yap') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout> 