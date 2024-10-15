<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function submitRegisterForm(Request $request)
    {
        // Validasi data form
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        // Redirect ke halaman welcome dengan membawa data nama depan dan nama belakang
        return redirect()->route('welcome')->with([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
    }

    public function showWelcomePage()
    {
        // Ambil data dari session
        $first_name = session('first_name');
        $last_name = session('last_name');

        return view('welcome', compact('first_name', 'last_name'));
    }
}
