@extends('layouts.main')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="mb-4">Bağışçı Paneli</h2>
            
            <!-- İstatistikler -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Toplam Bağış</h5>
                            <h2>{{ $stats['total'] }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Bekleyen Bağış</h5>
                            <h2>{{ $stats['pending'] }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Teslim Edilen</h5>
                            <h2>{{ $stats['delivered'] }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Yeni Bağış Butonu -->
            <div class="mb-4">
                <a href="{{ route('donor.donations.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Yeni Bağış Oluştur
                </a>
            </div>

            <!-- Bağış Listesi -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Bağışlarım</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tarih</th>
                                    <th>Yemek</th>
                                    <th>Porsiyon</th>
                                    <th>Son Kullanma</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $donation)
                                <tr>
                                    <td>{{ $donation->created_at->format('d.m.Y') }}</td>
                                    <td>{{ $donation->food_name }}</td>
                                    <td>{{ $donation->portion_count }}</td>
                                    <td>{{ $donation->expiration_date->format('d.m.Y') }}</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <a href="{{ route('donor.donations.show', $donation) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 