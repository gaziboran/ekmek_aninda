<!-- İşlemler sütununda -->
<div class="btn-group">
    <button type="button" class="btn btn-sm btn-info" 
            data-bs-toggle="modal" 
            data-bs-target="#statusModal{{ $donation->id }}">
        <i class="fas fa-edit"></i>
    </button>
    <a href="{{ route('donation.qr', $donation) }}" 
       class="btn btn-sm btn-primary">
        <i class="fas fa-qrcode"></i>
    </a>
</div> 