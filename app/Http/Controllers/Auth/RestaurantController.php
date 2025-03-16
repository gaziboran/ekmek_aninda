<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.restaurant.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'restaurant_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::ROLE_RESTAURANT,
        ]);

        auth()->login($user);

        return redirect()->route('restaurant.dashboard')
            ->with('success', 'Restoran kaydınız başarıyla oluşturuldu!');
    }

    public function showLoginForm()
    {
        return view('auth.restaurant.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            
            if (!$user->isRestaurant()) {
                auth()->logout();
                return back()->withErrors(['email' => 'Bu giriş sadece restoranlar içindir.']);
            }

            $request->session()->regenerate();
            return redirect()->route('restaurant.dashboard');
        }

        return back()->withErrors([
            'email' => 'Verilen bilgiler kayıtlarımızla eşleşmiyor.',
        ]);
    }
} 