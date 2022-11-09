<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Course;

class StudentController extends Controller
{

    public function create()
    {
        $courses = Course::select('id', 'course_name')->get();

        return view('page/student/create')->with('courses', $courses);
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];
        $password = $request['password'];
        $course_id = $request['course_id'];
        if (
            $name == null || $email == null ||
            $birth_date == null || $password == null || $course_id == '-1'
        ) {
            return redirect('student/create');
        }

        $student = new Student();
        $student->student_name = $name;
        $student->student_email = $email;
        $student->student_birth_date = $birth_date;
        $student->student_password = $password;
        $student->course_id = $course_id;

        $student->save();

        return redirect('student');
    }

    public function index()
    {
        $students = Student::select('id', 'student_name', 'student_email', 'student_birth_date','course_id')
            ->orderBy('students.student_name')
            ->paginate(6);

        return view('page/student/view')->with('students', $students);
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();

        $courses = Course::select('id', 'course_name')->get();

        return view('page/student/edit')->with('student', $student)->with('courses', $courses);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('student/edit/' . $id);
        }

        $student = Student::where('id', $id)->first();
        $student->student_name = $name;
        $student->student_email = $email;
        $student->student_birth_date = $birth_date;

        $student->save();

        return redirect('student');
    }

    public function destroy($id)
    {
        Student::where('id', $id)->delete();

        return redirect()->back();
    }
}
