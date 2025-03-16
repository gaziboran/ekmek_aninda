<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'food_name',
        'description',
        'portion_count',
        'expiration_date',
        'status',
        'notes',
        'delivery_code',
        'delivered_at'
    ];

    protected $casts = [
        'expiration_date' => 'datetime',
        'delivered_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function generateDeliveryCode()
    {
        $this->delivery_code = strtoupper(uniqid());
        $this->save();
    }

    public function getQrCodeAttribute()
    {
        if (!$this->delivery_code) {
            return null;
        }
        
        return QrCode::size(200)
            ->generate(route('donation.verify', $this->delivery_code));
    }
} 