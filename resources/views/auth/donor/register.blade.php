<x-guest-layout>
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Logo ve Başlık -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-green-600 mb-2">YemekDost</h1>
                <h2 class="text-2xl font-bold text-gray-900">Yemek Bağışçısı Kaydı</h2>
                <p class="text-gray-600 mt-2">Bireysel olarak yemek bağışında bulunmak için kayıt olun</p>
            </div>

            <!-- Kayıt Formu -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <form method="POST" action="{{ route('donor.register') }}" class="space-y-6">
                    @csrf

                    <!-- Ad Soyad -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                            Ad Soyad
                        </label>
                        <input type="text" id="name" name="name"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                               placeholder="Adınız ve soyadınız"
                               required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- E-posta -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            E-posta
                        </label>
                        <input type="email" id="email" name="email"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                               placeholder="ornek@email.com"
                               required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Telefon -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                            Telefon
                        </label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                               placeholder="0555 555 55 55"
                               required>
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Adres -->
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">
                            Adres
                        </label>
                        <textarea id="address" name="address" rows="3"
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                                  placeholder="Bağış yapacağınız adres"
                                  required></textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Şifre -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Şifre
                        </label>
                        <input type="password" id="password" name="password"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                               placeholder="En az 8 karakterli şifre"
                               required>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Şifre Tekrar -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                            Şifre Tekrar
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                               placeholder="Şifrenizi tekrar girin"
                               required>
                    </div>

                    <!-- Kullanım Şartları -->
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms"
                               class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                               required>
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            <a href="#" class="text-green-600 hover:text-green-500">Kullanım şartlarını</a> okudum ve kabul ediyorum
                        </label>
                    </div>

                    <!-- Kayıt Ol Butonu -->
                    <div>
                        <button type="submit" 
                                class="w-full bg-green-600 text-white py-3 px-4 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                            Kaydı Tamamla
                        </button>
                    </div>

                    <!-- Giriş Yap Linki -->
                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            Zaten hesabınız var mı?
                            <a href="{{ route('donor.login') }}" class="font-medium text-green-600 hover:text-green-500">
                                Giriş yapın
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout> 