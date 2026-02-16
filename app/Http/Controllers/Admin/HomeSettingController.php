<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\File;

class HomeSettingController extends Controller
{
    public function index()
    {
        $setting = HomeSetting::first();
        return view('admin.home_settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = HomeSetting::first();
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = 'h_'.time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $data['image'] = $imageName;
        }

        if ($request->hasFile('billing_image')) {
            $billingImageName = 'b_'.time() . '.' . $request->billing_image->extension();
            $request->billing_image->move(public_path('assets/images'), $billingImageName);
            $data['billing_image'] = $billingImageName;
        }

        $setting->update($data);

        return redirect()->back()->with('success', 'Home settings updated successfully');
    }
}
