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
            DB::table('user')->insert([
                'name' => $name, 'email' => $email,
                'birth_date' => $birth_date, 'password' => $password
            ]);

            return redirect('user');
        }
    }

    public function index()
    {
        $users = DB::table('user')
            ->select('id', 'name', 'email', 'birth_date')
            ->get();

        return view('page.user.view')->with('users', $users);
    }

    public function edit($id)
    {
        $user = DB::table('user')->where('id', $id)->first();

        return view('page/user/edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $name = $request['name'];
        $email = $request['email'];
        $birth_date = $request['birth_date'];

        if ($name == null || $email == null || $birth_date == null) {
            return redirect('user/edit/' . $id);
        } else {
            DB::table('user')->where('id', $id)->update([
                'name' => $name, 'email' => $email,
                'birth_date' => $birth_date
            ]);

            return redirect('user');
        }
    }

    public function destroy($id)
    {
        DB::table('user')->where('id', $id)->delete();

        return redirect()->back();
    }
}
