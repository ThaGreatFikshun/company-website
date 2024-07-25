<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    // Show login form
    public function index()
    {
        return view('auth.login');
    }

    // Handle login request
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                             ->with('success', 'Signed in successfully');
        }
        
        return redirect('login')->withErrors(['email' => 'Email address or password is incorrect.']);
    }

    // Show registration form
    public function registration()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect('dashboard')->with('success', 'Registration successful. Welcome!');
    }

    // Create a new user
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Show dashboard
    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Get the currently authenticated user
            return view('dashboard', ['user' => $user]);
        }

        return redirect('login')->with('error', 'You need to log in first.');
    }

    // Handle logout request
    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Logged out successfully.');
    }
}
