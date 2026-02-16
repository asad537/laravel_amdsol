<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = md5($request->password);

        $user = User::where('username', $username)
                    ->where('password', $password)
                    ->first();

        if ($user) {
            Auth::login($user);
            return redirect('admin/home')->with('success', 'Welcome To The Dashboard');
        }

        return redirect('signin')->with('error', 'Username And Password Does Not Match');
    }

    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user_accounts,username',
            'email' => 'required|email|unique:user_accounts,email',
            'password' => 'required',
            'password2' => 'required|same:password',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => md5($request->password),
            'role_name' => 'admin',
            'role_id' => 1,
            'insert-datetime' => date('Y-m-d'),
            'status' => 1,
        ]);

        return redirect('signup')->with('success', 'Your account has been registered. You can login Now');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('signin');
    }
}
