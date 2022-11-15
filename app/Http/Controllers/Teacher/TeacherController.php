<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;

class TeacherController extends Controller
{

    public function create()
    {
        return view('page/teacher/create');
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];
        $password = $request['password'];
        if (
            $name == null || $email == null ||
            $birth_date == null || $password == null
        ) {
            return redirect('teacher/create');
        }

        $teacher = new Teacher();
        $teacher->teacher_name = $name;
        $teacher->teacher_email = $email;
        $teacher->teacher_birth_date = $birth_date;
        $teacher->teacher_password = $password;

        $teacher->save();

        return redirect('');
    }

    public function index()
    {
        $teachers = Teacher::select('id', 'teacher_name', 'teacher_email', 'teacher_birth_date')
            ->orderBy('teachers.teacher_name')->paginate(4);

        return view('page/teacher/view')->with('teachers', $teachers);
    }

    public function indexInfo()
    {
        $teachers = Teacher::join('courses', 'teachers.id', 'courses.teacher_id')
            ->select('*')->paginate(10);

        return view('page/teacher/info')->with('teachers', $teachers);
    }

    public function edit($id)
    {
        $teacher = Teacher::where('id', $id)->first();

        return view('page/teacher/edit')->with('teacher', $teacher);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('teacher/edit/' . $id);
        }

        $teacher = Teacher::where('id', $id)->first();
        $teacher->teacher_name = $name;
        $teacher->teacher_email = $email;
        $teacher->teacher_birth_date = $birth_date;

        $teacher->save();

        return redirect('');
    }

    public function destroy($id)
    {
        Teacher::where('id', $id)->delete();

        return redirect()->back();
    }
}
