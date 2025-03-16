<x-guest-layout>
    <div class="min-h-screen bg-gray-50">
        <!-- Header -->
        <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <a href="/" class="flex-shrink-0">
                        <span class="text-3xl font-bold text-indigo-600">YemekDost</span>
                    </a>
                    <div class="hidden sm:flex items-center space-x-8">
                        <a href="#nasil-calisir" class="text-gray-600 hover:text-indigo-600 font-medium">Nasıl Çalışır?</a>
                        <a href="#hakkimizda" class="text-gray-600 hover:text-indigo-600 font-medium">Hakkımızda</a>
                        <a href="#iletisim" class="text-gray-600 hover:text-indigo-600 font-medium">İletişim</a>
                        <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition duration-300 font-medium">Giriş Yap</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="pt-32 pb-20 text-center">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-5xl sm:text-6xl font-bold text-gray-900 mb-8 leading-tight">
                    İhtiyaç Sahiplerine<br>Yemek Ulaştırıyoruz
                </h1>
                <p class="text-xl sm:text-2xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    YemekDost, restoranlar ve gönüllü bağışçılardan gelen yemekleri<br>
                    ihtiyaç sahipleriyle buluşturarak toplumsal dayanışmayı güçlendiriyor.
                </p>
            </div>
        </div>

        <!-- Kullanıcı Tipi Seçimi -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
            <div class="bg-white rounded-3xl shadow-xl p-8 sm:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                        Nasıl Katılmak İstersiniz?
                    </h2>
                    <p class="text-lg text-gray-600">
                        Lütfen kullanıcı tipinizi seçin
                    </p>
                </div>

                <div class="space-y-6">
                    <!-- Restoran Seçeneği -->
                    <a href="{{ route('restaurant.register') }}" 
                       class="block p-8 border-2 border-indigo-100 rounded-2xl hover:border-indigo-500 hover:bg-indigo-50 transition duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="p-5 bg-indigo-100 rounded-full">
                                    <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-8">
                                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Restoran İşletmecisi</h3>
                                <p class="text-lg text-gray-600">Restoranınızı kaydedin ve bağış yapın</p>
                            </div>
                        </div>
                    </a>

                    <!-- Bağışçı Seçeneği -->
                    <a href="{{ route('donor.register') }}" 
                       class="block p-8 border-2 border-green-100 rounded-2xl hover:border-green-500 hover:bg-green-50 transition duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="p-5 bg-green-100 rounded-full">
                                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-8">
                                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Yemek Bağışçısı</h3>
                                <p class="text-lg text-gray-600">Bireysel olarak yemek bağışı yapın</p>
                            </div>
                        </div>
                    </a>

                    <!-- Yemek İsteyen Seçeneği -->
                    <a href="{{ route('receiver.register') }}" 
                       class="block p-8 border-2 border-orange-100 rounded-2xl hover:border-orange-500 hover:bg-orange-50 transition duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="p-5 bg-orange-100 rounded-full">
                                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-8">
                                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Yemek Almak İstiyorum</h3>
                                <p class="text-lg text-gray-600">Yemek bağışından faydalanın</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-lg text-gray-600 mb-2">Zaten hesabınız var mı?</p>
                    <a href="{{ route('login') }}" class="text-xl text-indigo-600 hover:text-indigo-800 font-semibold">
                        Giriş yapın
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> 
</body>
</html> 