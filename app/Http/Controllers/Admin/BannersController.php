<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Slider::orderBy('position', 'ASC')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alt' => 'required',
            'image' => 'required|image',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/banners'), $imageName);

        Slider::create([
            'name' => $request->name,
            'text' => $request->text,
            'alt' => $request->alt,
            'images' => $imageName,
            'status' => $request->status ?? 1,
            'position' => $request->position ?? 0,
            'dtAdded' => date('Y-m-d H:i:s'),
            'button' => 0,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner added successfully');
    }

    public function update(Request $request, $id)
    {
        $banner = Slider::findOrFail($id);

        $request->validate([
            'alt' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if ($banner->images && File::exists(public_path('images/banners/' . $banner->images))) {
                File::delete(public_path('images/banners/' . $banner->images));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/banners'), $imageName);
            $banner->images = $imageName;
        }

        $banner->name = $request->name;
        $banner->text = $request->text;
        $banner->alt = $request->alt;
        $banner->status = $request->status;
        $banner->position = $request->position;
        $banner->dtUpdated = date('Y-m-d H:i:s');
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully');
    }

    public function destroy($id)
    {
        $banner = Slider::findOrFail($id);
        if ($banner->images && File::exists(public_path('images/banners/' . $banner->images))) {
            File::delete(public_path('images/banners/' . $banner->images));
        }
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully');
    }
}
