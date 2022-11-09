<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Teacher;

class CourseController extends Controller
{

    public function create()
    {
        $teachers = Teacher::select('id', 'name')->get();

        return view('page/course/create')->with('teachers', $teachers);
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $course_number = $request['course_number'];
        $credit = $request['credit'];
        $teacher_id = $request['teacher_id'];
        if ($name == null || $course_number == null || $credit == null || $teacher_id == '-1') {
            return redirect('course/create');
        }

        $course = new Course();
        $course->name = $name;
        $course->course_number = $course_number;
        $course->credit = $credit;
        $course->teacher_id = $teacher_id;

        $course->save();

        return redirect('course');
    }

    public function index(Request $request)
    {
        $paginate = 4;

        $courses = Course::select('id', 'name', 'course_number', 'credit', 'teacher_id')
            ->orderBy('courses.name')->paginate($paginate);

        return view('page/course/view')->with('courses', $courses);
    }

    public function edit($id)
    {
        $course = Course::where('id', $id)->first();

        $teachers = Teacher::select('id', 'name')->get();

        return view('page/course/edit')->with('course', $course)->with('teachers', $teachers);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $course_number = $request['course_number'];
        $credit = $request['credit'];
        $teacher_id = $request['teacher_id'];

        if ($name == null || $course_number == null || $credit == null || $teacher_id == '-1') {
            return redirect('course/edit/' . $id);
        }

        $course = Course::where('id', $id)->first();
        $course->name = $name;
        $course->course_number = $course_number;
        $course->credit = $credit;
        $course->teacher_id = $teacher_id;

        $course->save();

        return redirect('course');
    }

    public function destroy($id)
    {
        Course::where('id', $id)->delete();

        return redirect()->back();
    }
}
