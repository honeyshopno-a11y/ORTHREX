<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Quality;
use App\Models\SurgeonCornerReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    /*
    |--------------------------------------------------------------------------
    | Store User
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')
            ->with('success', 'Registration Successful');
    }

    /*
    |--------------------------------------------------------------------------
    | Login Page
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        return view('auth.login');
    }

    /*
    |--------------------------------------------------------------------------
    | Login User
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
 
    
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]); 
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid email or password')->withInput($request->only('email'));
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {

        $data['categoryCount'] = Category::count();
        $data['productCount'] = Product::count();
        $data['surgeonCornerCount'] = SurgeonCornerReview::count();
        $data['qualityCount'] = Quality::count();
        $data['sliderCount'] = HomeSlider::count();
        return view('admin.dashboard', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
