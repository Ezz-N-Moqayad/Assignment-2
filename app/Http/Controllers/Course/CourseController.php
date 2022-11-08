<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{

    public function create()
    {
        return view('page/user/create');
    }

    public function store(Request $request)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];
        $password = $request['password'];
        if ($name == null || $email == null || $birth_date == null || $password == null) {
            return redirect('user/create');
        }

        $user = new Course();
        $user->name = $name;
        $user->email = $email;
        $user->birth_date = $birth_date;
        $user->password = $password;

        $user->save();

        return redirect('user');
    }

    public function index(Request $request)
    {
        $paginate = 4;

        $users = Course::select('id', 'name', 'email', 'birth_date')
            ->orderBy('user.name')->paginate($paginate);

        return view('page.user.view')->with('users', $users);
    }

    public function edit($id)
    {
        $user = Course::where('id', $id)->first();

        return view('page/user/edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('user/edit/' . $id);
        }

        $user = Course::where('id', $id)->first();
        $user->name = $name;
        $user->email = $email;
        $user->birth_date = $birth_date;

        $user->save();

        return redirect('user');
    }

    public function destroy($id)
    {
        Course::where('id', $id)->delete();

        return redirect()->back();
    }
}
