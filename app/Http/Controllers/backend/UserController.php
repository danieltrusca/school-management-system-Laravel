<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userView()
    {
        $data['users']=User::all();
        return view('backend.users.view_users',$data);
    }

    public function userAdd()
    {
        return view('backend.users.add_users');
    }

    public function userStore(Request $request)
    {
        $validatedData=$request->validate([
            'email'=>'required|unique:users',
            'name'=>'required|max:100'
        ]);

        $newUser=new User();
        $newUser->usertype=$request->usertype;
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        $newUser->password=bcrypt($request->password);

        $newUser->save();

        return redirect()->route('user.view');
    }
}
