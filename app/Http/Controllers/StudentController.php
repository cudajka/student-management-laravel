<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $newStudent = new Student();

        $newStudent->name = $request->input('name');
        $newStudent->birthday = $request->input('birthday');
        $newStudent->gender = $request->input('gender');
        $newStudent->country = $request->input('country');
        $newStudent->phone_number = $request->input('phone_number');
        $newStudent->email = $request->input('email');
        $newStudent->student_code = $request->input('student_code');
        $newStudent->bio = $request->input('bio');

        $newStudent->save();

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
    public function show(Student $students)
    {

    }
    public function edit(Request $request)
    {
        $student_id = $request->id;
        $edit_student = Student::find($student_id);
        return view('students.edit', compact('edit_student'));
    }
    public function update(Request $request)
    {
        $student_id = $_POST['student_id'];

        $edit_student = Student::find($student_id);

        $edit_student->name = $request->input('name');
        $edit_student->birthday = $request->input('birthday');
        $edit_student->gender = $request->input('gender');
        $edit_student->country = $request->input('country');
        $edit_student->phone_number = $request->input('phone_number');
        $edit_student->email = $request->input('email');
        $edit_student->student_code = $request->input('student_code');
        $edit_student->bio = $request->input('bio');

        $edit_student->save();

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
    public function delete(Request $request)
    {
        $student_id = $request->id;
        $delete_student = Student::find($student_id);
        $delete_student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
