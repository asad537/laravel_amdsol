<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicePage;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = ServicePage::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.form');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'seokey' => 'required|unique:service_pages,seokey']);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $data['image'] = $imageName;
        }
        ServicePage::create($data);
        return redirect()->route('service-pages.index')->with('success', 'Service added successfully');
    }

    public function edit($id)
    {
        $service = ServicePage::findOrFail($id);
        return view('admin.services.form', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = ServicePage::findOrFail($id);
        $request->validate(['title' => 'required', 'seokey' => 'required|unique:service_pages,seokey,'.$id]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $data['image'] = $imageName;
        }
        $service->update($data);
        return redirect()->route('service-pages.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        ServicePage::findOrFail($id)->delete();
        return redirect()->route('service-pages.index')->with('success', 'Service deleted successfully');
    }
}
