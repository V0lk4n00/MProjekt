<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
            return redirect()->route('admin.console');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $userInfo = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);

        if (Auth::attempt($userInfo))
        {
            $request->session()->regenerate();
            return redirect()->route('admin.console');
        }

        return back()->withErrors([
            'email' => 'Invalid information.',
        ]);
    }

    public function logout(Request $request)
    {
        if (!Auth::check())
        {
            return redirect()->route('admin.index');
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.index');
    }

    public function console()
    {
        if (!Auth::check())
        {
            return redirect()->route('admin.index');
        }

        $responses = Response::orderBy('created_at', 'desc')->get();
        return view('admin.console', compact('responses'));

    }
}
