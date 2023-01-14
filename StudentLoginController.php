<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/admin1');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
