<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = SiteSetting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = SiteSetting::first();
        $setting->update($request->all());
        return redirect()->back()->with('success', 'Site settings updated successfully');
    }
}
