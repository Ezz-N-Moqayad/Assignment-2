<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        } else {
            $query = "INSERT INTO user (name, email, birth_date, password) VALUES ('$name', '$email', '$birth_date', '$password')";
            DB::statement($query);

            return redirect('user');
        }
    }

    public function index()
    {
        $query = "SELECT * FROM user";
        $users = DB::select($query);

        return view('page/user/view')->with('users', $users);
    }

    public function edit($id)
    {
        $query = "SELECT * FROM user where id = $id limit 1";
        $users = DB::select($query);
        $user = $users[0];

        return view('page/user/edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('user/edit/' . $id);
            // return redirect('user');
        } else {
            $query = "UPDATE user SET name = '$name', email = '$email', birth_date = '$birth_date' WHERE id = $id";
            DB::statement($query);

            return redirect('user');
        }
    }

    public function destroy($id)
    {
        $query = "DELETE FROM user where id = $id";
        DB::statement($query);

        return redirect()->back();
    }
}
