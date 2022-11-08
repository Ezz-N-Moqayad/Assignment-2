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
        $phone = $request['phone'];
        $birth_date = $request['birth_date'];
        $password = $request['password'];
        if (
            $name == null || $email == null || $phone == null
            || $birth_date == null || $password == null
        ) {
            return redirect('teacher/create');
        }

        $teacher = new Teacher();
        $teacher->name = $name;
        $teacher->email = $email;
        $teacher->phone = $phone;
        $teacher->birth_date = $birth_date;
        $teacher->password = $password;

        $teacher->save();

        return redirect('teacher');
    }

    public function index()
    {
        $paginate = 4;

        $teachers = Teacher::select('id', 'name', 'email', 'phone', 'birth_date')
            ->orderBy('teachers.name')
            ->paginate($paginate);

        return view('page/teacher/view')->with('teachers', $teachers);
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
        $phone = $request['phone'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('teacher/edit/' . $id);
        }

        $teacher = Teacher::where('id', $id)->first();
        $teacher->name = $name;
        $teacher->email = $email;
        $teacher->phone = $phone;
        $teacher->birth_date = $birth_date;

        $teacher->save();

        return redirect('teacher');
    }

    public function destroy($id)
    {
        Teacher::where('id', $id)->delete();

        return redirect()->back();
    }
}
