<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'username' => 'required|unique:user_accounts,username,'.$user->id,
            'email' => 'required|email|unique:user_accounts,email,'.$user->id,
        ]);

        $user->username = $request->username;
        $user->email = $request->email;
        
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|min:6|confirmed',
            ]);
            // Support legacy md5 or transition to bcrypt. 
            // CI was using md5. I'll stick to md5 to keep it compatible with legacy database if needed.
            $user->password = md5($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
