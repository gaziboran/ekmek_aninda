@extends('layouts.main')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Bağış Detayı</h5>
                    <a href="{{ route('donor.dashboard') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Geri
                    </a>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Durum</h6>
                            @switch($donation->status)
                                @case('beklemede')
                                    <span class="badge bg-warning">Beklemede</span>
                                    @break
                                @case('onaylandı')
                                    <span class="badge bg-info">Onaylandı</span>
                                    @break
                                @case('teslim_edildi')
                                    <span class="badge bg-success">Teslim Edildi</span>
                                    @break
                                @case('iptal_edildi')
                                    <span class="badge bg-danger">İptal Edildi</span>
                                    @break
                            @endswitch
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h6>Oluşturulma Tarihi</h6>
                            {{ $donation->created_at->format('d.m.Y H:i') }}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6>Yemek Adı</h6>
                        <p>{{ $donation->food_name }}</p>
                    </div>

                    <div class="mb-4">
                        <h6>Açıklama</h6>
                        <p>{{ $donation->description }}</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Porsiyon Sayısı</h6>
                            <p>{{ $donation->portion_count }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Son Kullanma Tarihi</h6>
                            <p>{{ $donation->expiration_date->format('d.m.Y H:i') }}</p>
                        </div>
                    </div>

                    @if($donation->notes)
                    <div class="mb-4">
                        <h6>Notlar</h6>
                        <p>{{ $donation->notes }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 