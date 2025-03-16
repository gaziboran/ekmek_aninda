<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yemek Yardımı Paneli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 class="text-lg font-medium mb-4">Hoş Geldiniz, {{ Auth::user()->name }}!</h3>
                    
                    <div class="space-y-4">
                        <p>Buradan yemek yardımı talebinde bulunabilir ve mevcut taleplerinizi takip edebilirsiniz.</p>
                        
                        <!-- Buraya yemek talep formu ve talep listesi eklenecek -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 