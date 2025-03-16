@extends('layouts.main')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Bağış Teslim Onayı</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6>Bağış Bilgileri</h6>
                        <table class="table table-borderless">
                            <tr>
                                <td>Bağış No:</td>
                                <td>#{{ $donation->id }}</td>
                            </tr>
                            <tr>
                                <td>Yemek:</td>
                                <td>{{ $donation->food_name }}</td>
                            </tr>
                            <tr>
                                <td>Porsiyon:</td>
                                <td>{{ $donation->portion_count }}</td>
                            </tr>
                            <tr>
                                <td>Durum:</td>
                                <td>@include('restaurant.partials.status-badge', ['status' => $donation->status])</td>
                            </tr>
                        </table>
                    </div>

                    @if($donation->status !== 'teslim_edildi')
                        <form action="{{ route('donation.confirm', $donation->delivery_code) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Teslim Notu (Opsiyonel)</label>
                                <textarea name="notes" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    Teslim Aldım
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-success">
                            <h6>Bu bağış teslim edilmiştir</h6>
                            <p class="mb-0">Teslim Tarihi: {{ $donation->delivered_at->format('d.m.Y H:i') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 