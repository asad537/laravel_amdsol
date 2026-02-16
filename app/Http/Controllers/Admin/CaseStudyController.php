<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CaseStudy;
use Illuminate\Support\Facades\File;

class CaseStudyController extends Controller
{
    public function index()
    {
        $case_studies = CaseStudy::orderBy('id', 'DESC')->get();
        return view('admin.case_studies.index', compact('case_studies'));
    }

    public function create()
    {
        return view('admin.case_studies.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'seokey' => 'required|unique:case_studies,seokey',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/case-studies'), $imageName);
        }

        CaseStudy::create([
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

        return redirect()->route('case_studies.index')->with('success', 'Case Study added successfully');
    }

    public function edit($id)
    {
        $case_study = CaseStudy::findOrFail($id);
        return view('admin.case_studies.form', compact('case_study'));
    }

    public function update(Request $request, $id)
    {
        $case_study = CaseStudy::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'seokey' => 'required|unique:case_studies,seokey,' . $id,
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($case_study->image && File::exists(public_path('assets/images/case-studies/' . $case_study->image))) {
                File::delete(public_path('assets/images/case-studies/' . $case_study->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/case-studies'), $imageName);
            $case_study->image = $imageName;
        }

        $case_study->title = $request->title;
        $case_study->text = $request->text;
        $case_study->author = $request->author;
        $case_study->seokey = $request->seokey;
        $case_study->meta_title = $request->meta_title;
        $case_study->meta_keywords = $request->meta_keywords;
        $case_study->meta_description = $request->meta_description;
        $case_study->display = $request->display;
        $case_study->save();

        return redirect()->route('case_studies.index')->with('success', 'Case Study updated successfully');
    }

    public function destroy($id)
    {
        $case_study = CaseStudy::findOrFail($id);
        if ($case_study->image && File::exists(public_path('assets/images/case-studies/' . $case_study->image))) {
            File::delete(public_path('assets/images/case-studies/' . $case_study->image));
        }
        $case_study->delete();

        return redirect()->route('case_studies.index')->with('success', 'Case Study deleted successfully');
    }
}
