@extends('layouts.main')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Yeni Bağış Oluştur</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('donor.donations.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="food_name" class="form-label">Yemek Adı</label>
                            <input type="text" class="form-control @error('food_name') is-invalid @enderror" 
                                id="food_name" name="food_name" value="{{ old('food_name') }}" required>
                            @error('food_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Açıklama</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="portion_count" class="form-label">Porsiyon Sayısı</label>
                            <input type="number" class="form-control @error('portion_count') is-invalid @enderror" 
                                id="portion_count" name="portion_count" value="{{ old('portion_count') }}" required min="1">
                            @error('portion_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="expiration_date" class="form-label">Son Kullanma Tarihi</label>
                            <input type="datetime-local" class="form-control @error('expiration_date') is-invalid @enderror" 
                                id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}" required>
                            @error('expiration_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Notlar (Opsiyonel)</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" 
                                id="notes" name="notes" rows="2">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Bağış Oluştur</button>
                            <a href="{{ route('donor.dashboard') }}" class="btn btn-outline-secondary">İptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 