<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPage;

class StaticPageController extends Controller
{
    public function index()
    {
        $pages = StaticPage::all();
        return view('admin.static_pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.static_pages.form');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'seokey' => 'required|unique:static_pages,seokey']);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $data['image'] = $imageName;
        }
        StaticPage::create($data);
        return redirect()->route('static-pages.index')->with('success', 'Page added successfully');
    }

    public function edit($id)
    {
        $page = StaticPage::findOrFail($id);
        return view('admin.static_pages.form', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = StaticPage::findOrFail($id);
        $request->validate(['title' => 'required', 'seokey' => 'required|unique:static_pages,seokey,'.$id]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $data['image'] = $imageName;
        }
        $page->update($data);
        return redirect()->route('static-pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy($id)
    {
        StaticPage::findOrFail($id)->delete();
        return redirect()->route('static-pages.index')->with('success', 'Page deleted successfully');
    }
}
