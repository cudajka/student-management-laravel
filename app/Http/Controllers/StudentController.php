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

        //Xử lý thêm ảnh đại diện
        $filePath = storage_path('app/public/img/avatar/');
        if (request()->hasFile('avatar')) {
            $file = request()->file('avatar');
            $fileName = time().$file->getClientOriginalName();
            $file->move($filePath, $fileName);
            $newStudent->avatar = $fileName;
        }else $newStudent->avartar = "";
        //Kết thúc xử lý thêm ảnh đại diện

        $newStudent->name = $request->input('name');
        $newStudent->birthday = $request->input('birthday');
        $newStudent->gender = $request->input('gender');
        $newStudent->country = $request->input('country');
        $newStudent->phone_number = $request->input('phone_number');
        $newStudent->email = $request->input('email');
        $newStudent->student_code = $request->input('student_code');
        $newStudent->hobbies = json_encode($request->hobby);
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

        if ($request->hasFile('avatar')) {
            $filePath = storage_path('app/public/img/avatar/');
            $file = request()->file('avatar');
            $fileName = time().$file->getClientOriginalName();
            $file->move($filePath, $fileName);

            //Xóa ảnh cũ
            if (!is_null($edit_student->avatar)) {
                $old_avatar = storage_path('app/public/img/avatar'.$edit_student->avatar);
                if (file_exists($old_avatar)) {
                    if ($edit_student->avatar != "noavatar.png") {
                        unlink($old_avatar);
                    }
                }
            }
            $edit_student->avatar = $fileName;
        }

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

        if (!is_null($delete_student->avatar)) {
            $avatar = storage_path('app/public/img/avatar/'.$delete_student->avatar);
            if (file_exists($avatar)) {
                if ($delete_student->avatar != "noavatar.png") {
                    unlink($avatar);
                }
            }
        }

        $delete_student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
