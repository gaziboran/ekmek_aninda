<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function dashboard()
    {
        $donations = auth()->user()->donations()->latest()->get();
        $stats = [
            'total' => $donations->count(),
            'pending' => $donations->where('status', 'beklemede')->count(),
            'delivered' => $donations->where('status', 'teslim_edildi')->count(),
        ];
        
        return view('donor.dashboard', compact('donations', 'stats'));
    }

    public function create()
    {
        return view('donor.donations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'food_name' => 'required|string|max:255',
            'description' => 'required|string',
            'portion_count' => 'required|integer|min:1',
            'expiration_date' => 'required|date|after:now',
            'notes' => 'nullable|string'
        ]);

        $validated['user_id'] = auth()->id();
        $validated['status'] = 'beklemede';

        Donation::create($validated);

        return redirect()->route('donor.dashboard')
            ->with('success', 'Bağışınız başarıyla oluşturuldu.');
    }

    public function show(Donation $donation)
    {
        return view('donor.donations.show', compact('donation'));
    }
} 