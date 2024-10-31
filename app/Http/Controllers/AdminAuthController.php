<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log; // Import the Log facade

class AdminAuthController extends Controller
{
    // public function showLoginForm()
    // {
    //     return view('admin.auth.login');
    // }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     $admin = AdminUser::where('email', $request->email)->first();

    //     if (!$admin) {
    //         Log::info('Admin user not found: ' . $request->email);
    //         return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    //     }

    //     if (!Hash::check($request->password, $admin->password)) {
    //         Log::info('Password mismatch for admin user: ' . $request->email);
    //         return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    //     }

    //     Auth::guard('admin')->login($admin);
    //     return redirect()->route('admin.dashboard');
    // }

    // public function logout()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect()->route('admin.login');
    // }
}
