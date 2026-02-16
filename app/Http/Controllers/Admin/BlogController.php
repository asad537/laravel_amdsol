<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'seokey' => 'required|unique:blog,seokey',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $imageName,
            'author' => $request->author ?? 'Admin',
            'date' => date('Y-m-d'),
            'seokey' => $request->seokey,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'display' => $request->display ?? '1',
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.form', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'seokey' => 'required|unique:blog,seokey,' . $id,
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image && File::exists(public_path('assets/images/' . $blog->image))) {
                File::delete(public_path('assets/images/' . $blog->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $blog->image = $imageName;
        }

        $blog->title = $request->title;
        $blog->text = $request->text;
        $blog->author = $request->author;
        $blog->seokey = $request->seokey;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->display = $request->display;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image && File::exists(public_path('assets/images/' . $blog->image))) {
            File::delete(public_path('assets/images/' . $blog->image));
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
