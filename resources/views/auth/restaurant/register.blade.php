<x-guest-layout>
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold">Restoran Kaydı</h2>
        <p class="text-gray-600">Restoranınızı sisteme kaydedin</p>
    </div>

    <form method="POST" action="{{ route('restaurant.register') }}">
        @csrf

        <!-- Restoran Adı -->
        <div>
            <x-input-label for="restaurant_name" :value="__('Restoran Adı')" />
            <x-text-input id="restaurant_name" class="block mt-1 w-full" type="text" name="restaurant_name" :value="old('restaurant_name')" required autofocus />
            <x-input-error :messages="$errors->get('restaurant_name')" class="mt-2" />
        </div>

        <!-- Yetkili Ad Soyad -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Yetkili Ad Soyad')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-posta')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefon -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Telefon')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Adres -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Adres')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Şifre')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Şifre Tekrar')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('restaurant.login') }}">
                {{ __('Zaten hesabınız var mı?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Kayıt Ol') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> 