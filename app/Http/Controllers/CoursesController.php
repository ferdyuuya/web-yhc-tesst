<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();

        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $course = new Courses();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    public function edit($id)
    {
        $course = Courses::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $course = Courses::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Courses::find($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
