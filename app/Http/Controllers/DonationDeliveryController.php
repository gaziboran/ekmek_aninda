<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationDeliveryController extends Controller
{
    public function generateCode(Donation $donation)
    {
        if (!$donation->delivery_code) {
            $donation->generateDeliveryCode();
        }

        return back()->with('success', 'Teslim kodu oluşturuldu.');
    }

    public function verify($code)
    {
        $donation = Donation::where('delivery_code', $code)->firstOrFail();
        
        return view('donations.verify', compact('donation'));
    }

    public function confirm(Request $request, $code)
    {
        $donation = Donation::where('delivery_code', $code)->firstOrFail();
        
        if ($donation->status === 'teslim_edildi') {
            return back()->with('error', 'Bu bağış zaten teslim edilmiş.');
        }

        $donation->update([
            'status' => 'teslim_edildi',
            'delivered_at' => now(),
            'notes' => $request->notes ? $donation->notes . "\n" . $request->notes : $donation->notes
        ]);

        return back()->with('success', 'Bağış başarıyla teslim edildi.');
    }

    public function showQr(Donation $donation)
    {
        return view('donations.qr', compact('donation'));
    }
} 