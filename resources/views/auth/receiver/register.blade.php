<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold">Yemek Yardımı Almak İçin Kayıt Ol</h2>
        <p class="text-gray-600 mt-2">Lütfen bilgilerinizi doldurun</p>
    </div>

    <form method="POST" action="{{ route('receiver.register') }}">
        @csrf

        <!-- Ad Soyad -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Ad Soyad')" />
            <x-text-input id="name" 
                         type="text" 
                         name="name" 
                         :value="old('name')" 
                         required 
                         autofocus 
                         autocomplete="name"
                         placeholder="Ad Soyad giriniz" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('E-posta')" />
            <x-text-input id="email" 
                         type="email" 
                         name="email" 
                         :value="old('email')" 
                         required 
                         autocomplete="email"
                         placeholder="ornek@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Telefon -->
        <div class="mb-4">
            <x-input-label for="phone" :value="__('Telefon Numarası')" />
            <x-text-input id="phone" 
                         type="tel" 
                         name="phone" 
                         :value="old('phone')" 
                         required 
                         placeholder="05XX XXX XX XX" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Adres -->
        <div class="mb-4">
            <x-input-label for="address" :value="__('Adres')" />
            <textarea id="address" 
                      name="address" 
                      class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      required 
                      rows="3"
                      placeholder="Açık adresinizi giriniz">{{ old('address') }}</textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Şifre -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Şifre')" />
            <x-text-input id="password" 
                         type="password" 
                         name="password" 
                         required 
                         autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Şifre Tekrar -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Şifre Tekrar')" />
            <x-text-input id="password_confirmation" 
                         type="password"
                         name="password_confirmation" 
                         required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('receiver.login') }}">
                Zaten hesabınız var mı?
            </a>

            <x-primary-button>
                {{ __('Kayıt Ol') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> 