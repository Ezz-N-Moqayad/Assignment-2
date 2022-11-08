<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{

    public function create()
    {
        return view('page/student/create');
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
            return redirect('student/create');
        }

        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->phone = $phone;
        $student->birth_date = $birth_date;
        $student->password = $password;

        $student->save();

        return redirect('student');
    }

    public function index()
    {
        $paginate = 4;

        $students = Student::select('id', 'name', 'email', 'phone', 'birth_date')
            ->orderBy('students.name')
            ->paginate($paginate);

        return view('page/student/view')->with('students', $students);
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();

        return view('page/student/edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('student/edit/' . $id);
        }

        $student = Student::where('id', $id)->first();
        $student->name = $name;
        $student->email = $email;
        $student->phone = $phone;
        $student->birth_date = $birth_date;

        $student->save();

        return redirect('student');
    }

    public function destroy($id)
    {
        Student::where('id', $id)->delete();

        return redirect()->back();
    }
}
