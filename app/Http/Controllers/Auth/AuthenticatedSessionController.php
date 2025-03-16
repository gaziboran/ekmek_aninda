<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Giriş formunu göster
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Giriş işlemini gerçekleştir
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME)
            ->with('success', 'Başarıyla giriş yaptınız.');
    }

    /**
     * Çıkış işlemini gerçekleştir
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Başarıyla çıkış yaptınız.');
    }
} 