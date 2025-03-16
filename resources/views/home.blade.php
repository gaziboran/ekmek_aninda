@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 mb-4">İyilik Sofranızda Başlar</h1>
        <p class="lead mb-5">Fazla yemeğinizi ihtiyaç sahipleriyle paylaşın, topluma katkıda bulunun.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/register" class="btn btn-primary-custom">Hemen Başla</a>
            <a href="#nasil-calisir" class="btn btn-outline-light">Nasıl Çalışır?</a>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Neler Sunuyoruz?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-hand-holding-heart fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Kolay Bağış</h3>
                        <p class="text-muted">Birkaç tıkla yemek bağışınızı gerçekleştirin.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-truck fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Güvenli Teslimat</h3>
                        <p class="text-muted">Yemekleriniz güvenli bir şekilde ihtiyaç sahiplerine ulaştırılır.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card card h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-4">
                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                        </div>
                        <h3 class="h5">Güvenilir Platform</h3>
                        <p class="text-muted">Şeffaf ve güvenilir bağış sistemi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section id="nasil-calisir" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Nasıl Çalışır?</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="h1 mb-3 text-primary">1</div>
                    <h5>Üye Olun</h5>
                    <p class="text-muted">Hızlı ve kolay üyelik işlemi</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="h1 mb-3 text-primary">2</div>
                    <h5>Bağış Yapın</h5>
                    <p class="text-muted">Yemek bağışınızı oluşturun</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="h1 mb-3 text-primary">3</div>
                    <h5>Onay Bekleyin</h5>
                    <p class="text-muted">Bağışınız kontrol edilir</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="h1 mb-3 text-primary">4</div>
                    <h5>Teslim Edilsin</h5>
                    <p class="text-muted">İhtiyaç sahibine ulaştırılır</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 