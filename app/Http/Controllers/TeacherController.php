<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
        //return "works"; 

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
        ]);

        Teacher::create($validatedData);

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher created successfully.');
    }

    
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

   
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'subject' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validatedData);

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully.');
    }

   
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}