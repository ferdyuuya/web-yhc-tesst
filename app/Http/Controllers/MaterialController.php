<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Courses;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    
    public function index($courseId)
    {
        $courseId = Courses::findOrFail($courseId);
        $material = $courseId->material()->paginate(10);
        return view('material.index', compact('material', 'courseId'));
    }

    public function create($courseId)
    {
        $courseId = Courses::findOrFail($courseId);
        return view('material.create', compact('courseId'));
    }
 
    public function store(Request $request, $courseId)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'link' => 'required',
    ]);

    $material = new Material();
    $material->title = $request->title;
    $material->description = $request->description;
    $material->link = $request->link;
    $material->courses_id = $courseId;
    $material->save();

        return redirect()->route('material.index', $courseId)->with('success', 'Material created successfully');
    }

    public function edit($courseId, $id)
    {
        $material = Material::findOrFail($id);

        return view('material.edit', [
            'material' => $material,
            'courseId' => $courseId,
        ]);
    }


    public function update(Request $request, $courseId, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
        ]);

        $material = Material::findOrFail($id);

        $material->title = $request->input('title');
        $material->description = $request->input('description');
        $material->link = $request->input('link');
        $material->save();

        return redirect()->route('material.index', ['courseId' => $courseId])->with('success', 'Material updated successfully');
    }


    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $courseId = $material->courses_id;
        $material->delete();

        return redirect()->route('material.index', $courseId)->with('success', 'Material deleted successfully');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('material.show', compact('material'));
    }
}
