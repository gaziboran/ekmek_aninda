@extends('layouts.main')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Teslim QR Kodu</h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <h6>Bağış #{{ $donation->id }}</h6>
                        <p class="text-muted">{{ $donation->food_name }}</p>
                    </div>

                    @if($donation->delivery_code)
                        <div class="mb-4">
                            {!! $donation->qr_code !!}
                        </div>
                        <div class="mb-4">
                            <p class="mb-1">Teslim Kodu:</p>
                            <h4>{{ $donation->delivery_code }}</h4>
                        </div>
                        <div class="alert alert-info">
                            Bu QR kodu teslim sırasında okutulmalıdır.
                        </div>
                    @else
                        <div class="alert alert-warning">
                            Henüz teslim kodu oluşturulmamış.
                        </div>
                        <form action="{{ route('donation.generate-code', $donation) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Teslim Kodu Oluştur
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 